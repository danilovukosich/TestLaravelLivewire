<?php

namespace App\Livewire\Forms;

use App\Models\Institucion;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InstitucionForm extends Form
{
    //

    // #[Validate('string','rquired')]
    
    public $clave;
    // #[Validate('string','rquired')]
    public $valor;
    // #[Validate('string','rquired')]


    public function store()
    {
        $this->validate([
            'clave' => 'required|integer', 
            'valor' => 'required|string' 
        ]);

        Institucion::create([
            'clave'=>$this->clave,
            'valor'=>$this->valor
        ]);


        $this->reset();
    }
}
