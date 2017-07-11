<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;


class ProyectoController extends Controller
{
    public function index() {
      $proyectos = App\Proyecto::paginate();
      return view('proyectos/list',compact('proyectos'));
    }
    public function create() {
      return view('proyectos/create');
    }
    public function edit($id_proyecto) {
      $proyecto = App\Proyecto::find($id_proyecto);
      return view('proyectos/edit', compact('proyecto'));
    }
    public function store($id_proyecto = null) {
      $this->validate(request(),[
        'nombre' => ['required'],
      ]);
      $datos = request()->all();
      App\Proyecto::updateOrCreate(['id'=>$id_proyecto],$datos);
      return redirect()->to('admin/proyecto');
    }
    public function delete($id_proyecto) {
      App\Proyecto::destroy($id_proyecto);
    }
}
