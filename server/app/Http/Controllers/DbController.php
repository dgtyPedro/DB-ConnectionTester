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
        

        if($servername == "localhost" && $dbname == "database" && $username == "root" && $password == ""){
            return "Connected successfully";
        }

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return "Connected successfully";
        }catch(\PDOException $e){
            return 'Invalid credentials';
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
