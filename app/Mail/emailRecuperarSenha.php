<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class emailRecuperarSenha extends Mailable
{
    use Queueable, SerializesModels;

    protected $nova_senha;

    //=========================================
    public function __construct($nova_senha)
    {
        $this->nova_senha = $nova_senha;
    }

    //=========================================
    public function build()
    {
        //compact ou with para passar o parâmetro
        //------compact
        // $dados = ['nova_senha' => $this->nova_senha];
        // return $this->view('emails.emailRecuperarSenha', compact('dados'));

        //with
        return $this->view('emails.emailRecuperarSenha')
                    ->with(['nova_senha' => $this->nova_senha]);
    }
}
