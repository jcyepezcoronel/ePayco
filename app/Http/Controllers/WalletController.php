<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /* example of return 
    $response = [
        'success' => ,
        'cod_error' => ,
        'message_error' => ,
    ]; */


    public function depositMoneyCustomer(Request $request){

    }

    public function paymentMoneyCustomer(Request $request){
        
    }

    public function balanceMoneyCustomer(Request $request){
        
    }
}
