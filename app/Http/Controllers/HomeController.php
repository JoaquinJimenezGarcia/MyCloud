<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function documents()
    {
      $files = File::allFiles('../storage/app/public/documents');

      return view('documents')->with('files', $files);
    }

    public function documentsSend(Request $request)
    {
      $files = File::allFiles('../storage/app/public/documents');
      $v = \Validator::make($request->all(), [

          'file' => 'required'
      ]);

      if ($v->fails())
      {
        flash('Select a valid document!')->error();

        return view('documents')->with('files', $files);

      } else {
        $request->file('file')->store('public/documents');
        flash('Document uploaded successfully!')->success();

        return view('documents')->with('files', $files);
      }
    }

    public function images()
    {
      $files = File::allFiles('../storage/app/public/images');

      return view('images')->with('files', $files);
    }

    public function imagesSend(Request $request)
    {
      $files = File::allFiles('../storage/app/public/images');
      $v = \Validator::make($request->all(), [

          'file' => 'required'
      ]);

      if ($v->fails())
      {
        flash('Select a valid image!')->error();

        return view('images')->with('files', $files);

      } else {
        $request->file('file')->store('public/images');
        flash('Image uploaded successfully!')->success();

        return view('images')->with('files', $files);
      }

    }

    public function films()
    {
      $files = File::allFiles('../storage/app/public/films');

      return view('films')->with('files', $files);
    }

    public function filmsSend(Request $request)
    {
      $files = File::allFiles('../storage/app/public/films');
      $v = \Validator::make($request->all(), [

          'file' => 'required'
      ]);

      if ($v->fails())
      {
        flash('Select a valid film!')->error();

        return view('films')->with('files', $files);

      } else {
        $request->file('file')->store('public/films');
        flash('Film uploaded successfully!')->success();

        return view('films')->with('files', $files);
      }
    }

    public function music()
    {
      $files = File::allFiles('../storage/app/public/music');

      return view('music')->with('files', $files);
    }

    public function musicSend(Request $request)
    {
      $files = File::allFiles('../storage/app/public/music');
      $v = \Validator::make($request->all(), [

          'file' => 'required'
      ]);

      if ($v->fails())
      {
        flash('Select a valid song!')->error();

        return view('music')->with('files', $files);

      } else {
        $request->file('file')->store('public/music');
        flash('Song uploaded successfully!')->success();

        return view('music')->with('files', $files);
      }

    }

    public function otherdata()
    {
      $files = File::allFiles('../storage/app/public/otherdata');

      return view('otherdata')->with('files', $files);
    }

    public function otherdataSend(Request $request)
    {
      $files = File::allFiles('../storage/app/public/otherdata');
      $v = \Validator::make($request->all(), [

          'file' => 'required'
      ]);

      if ($v->fails())
      {
        flash('Select a valid file!')->error();

        return view('otherdata')->with('files', $files);

      } else {
        $request->file('file')->store('public/otherdata');
        flash('File uploaded successfully!')->success();

        return view('otherdata')->with('files', $files);
      }

    }
}
