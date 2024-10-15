<?php

namespace App\Livewire;

use App\Models\Institucion;
use Livewire\Component;

class InstitucionIndex extends Component
{

    public bool $modalInst = false;//modal
    

    public function render()
    {
        $headers = [
            ['key' => 'clave', 'label' => '#', 'class' => 'bg-yellow-500 w-1 text-black'],
            ['key' => 'valor', 'label' => 'Nombre de la institucion', 'class' => 'text-black'],
        ];

        return view('livewire.institucion-index', [
            'instituciones'=>Institucion::all(),
            'headers'=>$headers
        ]);//parametros que le paso a la vista estan dentro del corchete. DEBEN MATCHEAR CON LOS NOMBRES DE LAS VARIABLE EN EL BLADE.PHP DEL COMPONENTE
    }
}
