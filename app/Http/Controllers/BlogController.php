<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Social;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['articles']=Blog::all();
        return view('backend.blog',$data);
    }

    public function blog()
    {
        $data['menu']='blog';
        $data['socials']=Social::all();
        $data['articles']=Blog::whereStatus(0)->get();
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['article']=DB::table('blogs')
            ->where('id',$id)
            ->first();
        $data['comments']=DB::table('comments')
            ->where('articleId',$id)
            ->get();
        $data['others']=DB::table('blogs')
            ->where('id','!=',$id)
            ->get();
        $data['socials']=Social::all();
        $data['menu']="blog";
        return view('frontend.article',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['article']=Blog::find($id);
        return view('backend.edit-article',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'contenu' => 'required'
        ]);

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
        $blog = Blog::find($request->id);
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
            }
        }
        $blog->update();

        return redirect()->route('dash.blog')->with(['message' => 'Article modifié avec succes']);
    }

    public function publishArticle($id){
        $article=Blog::find($id);
        if ($article->status==0){
            $article->update([
                'status'=> 1
            ]);
            return redirect()->route('dash.blog')->with(['message' => 'Article non publié']);
        }else{
            $article->update([
                'status'=> 0
            ]);
            return redirect()->route('dash.blog')->with(['message' => 'Article publié']);
        }

    }

    public function delete($id)
    {
        if (Blog::destroy($id)){
            return redirect()->route('dash.blog')->with(['message' => 'article supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'erreur de suppression']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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
