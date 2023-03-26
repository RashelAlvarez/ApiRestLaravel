<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;
use App\Mail\EmailSend;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __invoke(Request $request){
        Mail::to('rashelalvarez21@gmail.com')->send(new MensajeRecibido($request));

        return redirect()->back();
    }*/
    public function index()
    {
        $contactos=Contacto::all();
        return response()->json($contactos);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        //
        
      
        $contacto=Contacto::create($request->all());
        //dd($contacto);
        Mail::to('rashelalvarez21@gmail.com')->send(new MensajeRecibido($request));
        Mail::to($request->email)->send(new EmailSend($request));
        return response()->json(['contacto'=>$contacto]);
        

    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
