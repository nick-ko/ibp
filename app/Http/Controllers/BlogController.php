<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=DB::table('blogs')->where('status','=',1)->get();
        return view('backend.blog',compact('articles'));
    }

    public function blog()
    {
        $data['menu']='blog';
        $data['articles']=DB::table('blogs')->get();
        return view('frontend.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $content=$request->contenu;
        $title=$request->title;
        $description=$request->description;

        $dom = new domdocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }


        $content = $dom->saveHTML();
        $blog = new Blog();
        $blog->title = $title;
        $blog->description = $description;
        $blog->content = $content;
        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/blog/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $blog->image=$slider_image;
                $blog->save();
            }
        }

        return redirect()->route('dash.blog')->with(['message' => 'Nouveaux article crée avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=DB::table('blogs')
            ->where('id',$id)
            ->first();
        $comments=DB::table('comments')
            ->where('articleId',$id)
            ->get();
        $others=DB::table('blogs')
            ->where('id','!=',$id)
            ->get();
        return view('frontend.article',compact('article','comments','others'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    public function delete($id)
    {
        DB::table('blogs')
            ->where('id', $id)
            ->delete();

        return redirect()->route('dash.blog')->with(['message' => 'article supprimé avec succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $comment=$request->comment;
        $article=$request->article;

        $commentaire=new Comment();
        $commentaire->name = $name;
        $commentaire->email = $email;
        $commentaire->comment = $comment;
        $commentaire->articleId = $article;
        $commentaire->save();

        return redirect('/blog/article/'.$article)->with('message','Vous venez de commenter cet article');
    }
}
