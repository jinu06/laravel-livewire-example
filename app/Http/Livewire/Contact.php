<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'message' => 'required',

    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function sendMessage()
    {
        $this->validate();  //validation

        session()->flash('message', 'message sent successfully'); //success message

        $this->resetForm();
        //reset function mention there
    }
    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
