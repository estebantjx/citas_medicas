<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';

    protected $allowedFields = ['Nombre','Apellido','Documento','TipoDocumento','Usuario','Contraseña'];
}