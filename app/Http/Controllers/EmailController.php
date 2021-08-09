<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function viewHome(){
        return view('web.home');
    }
    public function sendFormularioContacto(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'form_nombre' => 'required',
                'form_apellido' => 'required',
                'form_email' => 'required|email',
                'form_telefono' => 'required',
                'form_comentario' => 'required'
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $datos = [
                "nombres" => $request->form_nombre,
                "apellidos" => $request->form_apellido,
                "tipoDocumento" => $request->form_tipoDocumento,
                "numeroDocumento" => $request->form_numeroDocumento,
                "email" => $request->form_email,
                "telefono" => $request->form_telefono,
                "empresa" => $request->form_empresa,
                "sector" => $request->form_sector,
                "asunto" => $request->form_asunto,
                "comentario" => $request->form_comentario
            ];
            //->bcc('cayocq@gmail.com')
            Mail::to('jesus.ramirez9@unmsm.edu.pe')
                ->send(new Contacto($datos));
            return redirect()->route('linkContacto', ['msg' => 'success']);
        }catch(Exception $e){
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
