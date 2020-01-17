<?php

namespace App\Http\Controllers;

use App\Service;
use App\Social;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['menu']='service';
        $data['socials']=Social::all();
        $data['services']=Service::take(6)->orderBy('id','desc')->get();
        return view('frontend.service',$data);
    }

    public function service()
    {
        $service=Service::orderBy('id','desc')->get();
        return view('backend.service',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.add-service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'contenue' => 'required',
            'title' => 'required'
        ]);

        $title = $request['title'];
        $contenue = $request['contenue'];

        $service= new Service();
        $service->title=$title;
        $service->contenue=$contenue;

        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/services/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $service->image=$slider_image;
                $service->save();
            }
        }
        return redirect()->route('dash.service')->with(['message' => 'Nouveau service ajouté avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Service::destroy($id)){
            return redirect()->route('dash.service')->with(['message' => 'Service supprimé avec succes']);
        }else{
            return back()->with(['message' => 'Erreur de suppression']);
        }
    }

}
