<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App;
use Mail;

class PageController extends Controller
{
    public function index() {
      $datos['staff'] = App\Staff::all();
      $datos['proyectos'] = App\Proyecto::all();
      return view('layout', compact('datos'));
    }
    public function mail() {

      Mail::raw('Text to e-mail', function ($message) {
          $message->from('us@example.com', 'Pagina Lines');
          $message->to('bifanolautaro@gmail.com');
      });
      return back();
    }
    public function form() {
      $datos = request()->all();

      Mail::raw($datos['message'], function ($message) {
          $message->from('us@example.com', 'Formularios Solicitudes');
          $message->to('bifanolautaro@gmail.com');
          $foto = '';

          if(request()->file('foto')) {
            $imageName = time() . uniqid() .'.'.request()->file('foto')->getClientOriginalExtension();
            $foto = request()->file('foto')->storeAs('images/forms',$imageName);
          }
          $message->attach(storage_path().'/app/'.$foto);
      });
      return back();
    }
}
