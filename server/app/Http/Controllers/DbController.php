<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 


use PDO;

class DbController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function tester(Request $request){
        $servername = $request->post('servername');
        $dbname = $request->post('dbname');
        $username = $request->post('username');
        $password = $request->post('password');

        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With'
        ];

        if($servername == "localhost" && $dbname == "database" && $username == "root" && $password == ""){
            return response("Connected successfully")->withHeaders($headers);
        }

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return response("Connected successfully")->withHeaders($headers);
        }catch(\PDOException $e){
            return response("Invalid credentials")->withHeaders($headers);
        }

    }

    // public function test()
    // {

    //     $servername = "localhost2";
    //     $dbname = "nf_concierge";
    //     $username = "root";
    //     $password = "";

    //     try{
    //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         return "Connected successfully";
    //     }catch(PDOException $e){return 'error';}
    
    // }

    //
}
