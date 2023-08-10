<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMensagem;

// Certifique-se de criar este Mailable

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function sendMail(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'text' => 'required',
        ]);

        // Envia o e-mail com os dados do formulário
        Mail::to($request->input('email'))->send(new ContatoMensagem($request));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
    }
}
