<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class CreateClient extends Component
{
    public bool $open = false;
    public string $name;
    public string $email;
    public string $phone;
    public string $address;


    public function render()
    {
        return view('livewire.create-client');
    }

    /**
     * Crea el nuevo ciente
     *
     * @return void
     */
    public function createClient()
    {
        $validated = $this->validate([
            'name'=> ['required','string','max:255'],
            'phone'=> ['required','string','max:9', 'unique:clients'],
        ]);

        Client::create($validated);

        $this->reset([
            'open',
            'name',
            'email',
            'phone',
            'address',
        ]);
    }
}
