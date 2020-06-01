<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * php artisan make:model Project -mc    (crea todo model,migration,controller)
     * php artisan make:controller ProjectsController -r (crea action RESTFUL en controlador)
     * php artisan make:controller ProjectsController -r -m Project (crea controlador RESTFUL y su modelo)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('clients');
    }

    public function show(Clients $clients)
    {
        //show a single resource

        $client = Clients::find($id);

        return view('clients',['clients' => $clients]);
    }

    public function create()
    {

        //shows a view to create a new resource

        return view('clients.create');

    }

    public function store()
    {
        dump(request()->all());
        //persist the new resource

    }

    public function edit(Clients $clients)
    {

        //show a view to edit an existing resource

    }

    public function update(Request $request,Clients $clients)
    {

        //persist the edited resource

    }

    public function destroy(Clients $clients)
    {

        //delete the resource

    }


}
