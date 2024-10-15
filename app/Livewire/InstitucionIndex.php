<?php

namespace App\Livewire;

use App\Livewire\Forms\InstitucionForm;
use App\Models\Institucion;
use Livewire\Component;

class InstitucionIndex extends Component
{
    public InstitucionForm $form;//injeccion del form

    public bool $modalInst = false;//modal
    

    public function save()
    {
        $this->form->store();
        $this->modalInst=false;
    }

    public function render()
    {
        $headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'bg-primary w-1 text-black'],
            ['key' => 'valor', 'label' => 'Nombre de la institucion', 'class' => 'text-black']
        ];

        return view('livewire.institucion-index', [
            'instituciones'=>Institucion::all(),
            'headers'=>$headers
        ]);//parametros que le paso a la vista estan dentro del corchete. DEBEN MATCHEAR CON LOS NOMBRES DE LAS VARIABLE EN EL BLADE.PHP DEL COMPONENTE
    }
}
