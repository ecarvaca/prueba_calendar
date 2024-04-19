<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function getAll(){
        try{
            $query = Tarea::orderBy('id','ASC');
    
            $data = $query->get();
    
            return Response()->json($data, 200);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
}
