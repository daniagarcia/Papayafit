<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function sendEmail(Request $req){

        $datacorreo = [
            // 'email'  => 'supernovaapps.desarrollo@gmail.com',
            // 'client' => $req->client,
            // 'product'=> $req->producto,
            'email'=> $req->email
        ];
        
        try {      
                \Mail::send('emails.email',['datapedido' => $datacorreo],function($message) use ($datacorreo){
                $message->from('supernovaapps.desarrollo@gmail.com', 'Papaya Fit');
                // $message->from('facturacion@selectoner.com.mx', 'Selectoner');
                // $message->to('dania_monserrat@live.com');          
                $message->to($datacorreo['email']);
                $message->subject('Papaya Fit');
           
            });
        } catch (Exception $e) {
            return response()->json(["status"=>500,"mensaje"=>"Surgió un error al enviar el correo, intenta más tarde o consulta con el administrador.","data"=>$datacorreo]);
        }   
            return response()->json(["status"=>200,"mensaje"=>"Los datos se han enviado exitosamente.","data"=>$datacorreo]);
    
    }
}
