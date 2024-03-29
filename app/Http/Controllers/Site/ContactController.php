<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;  //criarproduto
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Site.Contact.Index');
    }

    public function formulario(ContactFormRequest $request)
    {
        //método para o formulário de contato
        //ddd($request->all);
        $contact = Contact::create($request->all());

        Notification::route('mail', config('mail.from.address')) //email do admin do sistema
            ->notify(new NewContact($contact));

        //toastr()->success('O contato foi criado com sucesso!');
        return back()->with([
            'success' => true,
            'message' => 'O contato foi criado com sucesso!'
        ]);
    }
}
