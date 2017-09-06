<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


use App;
class StaffController extends Controller
{

    public function index() {
      $staff = App\Staff::paginate();
      return view('staff/list',compact('staff'));
    }
    public function create() {
      return view('staff/create');
    }
    public function edit($id_persona) {
      $persona = App\Staff::find($id_persona);
      return view('staff/edit',compact('persona'));
    }
    public function show($id_persona) {
      $persona = App\Staff::find($id_persona);
      return $persona;
    }
    public function delete($id_persona) {
      App\Staff::destroy($id_persona);
    }
    public function store($staff_id=null) {
      $this->validate(request(),[
        'nombre'   => ['required'],
        'apellido' => ['required'],
        'foto'     => ['mimes:png,jpg,jpeg'],
        'email'    => ['email']
      ]);
      $datos = request()->all();

      if(request()->file('foto')) {
        $imageName = $datos['nombre'].'_'.$datos['apellido'].'.'.request()->file('foto')->getClientOriginalExtension();
        $path = request()->file('foto')->storeAs('images/staff',$imageName);
        $datos['foto'] = '/'.$path;
      }

      App\Staff::updateOrCreate(['id'=>$staff_id],$datos);
      if($staff_id)
        return redirect()->to('admin/staff/'.$staff_id);
      else
        return redirect()->to('admin/staff');
    }

}
