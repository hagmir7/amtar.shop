<?php

namespace App\Livewire;

use App\Models\Subscribe as ModelsSubscribe;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Subscribe extends Component
{
    #[Validate('required|email|min:3')]
    public $email;
    public $message;

    public function save()
    {
        $this->validate();
        if(!ModelsSubscribe::where('email', $this->email)->first()){
            ModelsSubscribe::create(['email' => $this->email]);
        }
        $this->reset();
        $this->message = "Vous êtes abonné avec succès, Merci!";
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
