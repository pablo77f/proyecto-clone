<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
