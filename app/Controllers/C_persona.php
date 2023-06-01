<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class C_persona extends Controller{

    public function index()
    {

        $per = new Usuario();
        $datos['usuario']=$per->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {

        
        return view('agregar');
    }
    public function insertar()
    {
       
        $per = new Usuario();

        $data=[
            'Nombre' => $_POST['Nombre'],
            'Apellido' => $_POST['Apellido'],
            'Documento' => $_POST['Documento'],
            'TipoDocumento' => $_POST['TipoDocumento'],
            'Usuario' => $_POST['Usuario'],
            'contraseña' => $_POST['Contraseña']
        ];

        $per->insert($data);
        return redirect()->to(base_url());
       
        

        
    }
    public function eliminar($id=null)
    {
        
      

       $per = new Usuario();
        $per->delete($id);

        
        return redirect()->to(base_url());
    }
    public function editar($id = null)
    {

        $per = new Usuario();
        $registro['usuario']= $per->find($id);

      return view('actualizando',$registro);
     


       // return redirect()->to(base_url());
    }
    public function factualizar()
    {

        $per = new Usuario();
        $id= $_POST['id'];

        $data = [

            'Nombre' => $_POST['Nombre'],
            'Apellido' => $_POST['Apellido'],
            'Documento' => $_POST['Documento'],
            'TipoDocumento' => $_POST['TipoDocumento'],
            'Usuario' => $_POST['Usuario'],
            'Contraseña' => $_POST['Contraseña']
        ];
        $per->update($id,$data);

        



       return redirect()->to(base_url());
    }





}