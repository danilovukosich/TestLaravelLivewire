<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-mary-header title="Instituciones" subtitle="ABM de instituciones.">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-magnifying-glass" placeholder="Buscar instituciones..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-plus" class="btn-primary" @click="$wire.modalInst= true"/>{{-- @clic abre el modal --}}
        </x-slot:actions>
    </x-mary-header>

    {{-- You can use any `$wire.METHOD` on `@row-click` --}}
    <x-mary-table :headers="$headers" :rows="$instituciones" striped @row-click="alert(editar)">
        @scope('actions', $user)
        <div class="flex flex-row space-x-2">
            <x-mary-button icon="o-pencil" wire:click="" spinner class="btn-sm" />
            <x-mary-button icon="o-trash" wire:click="" spinner class="btn-sm btn-error" />
        </div>
        @endscope

    </x-mary-table>

    <x-mary-modal wire:model="modalInst" class="backdrop-blur">
        <x-mary-form wire:submit="save">
            <x-mary-header title="Crear institucion" separator progress-indicator />
            <x-mary-input label="Clave institucion" wire:model="form.clave" hint="Valor en minuscula separado con guion bajo"/>

            <x-mary-input label="Nombre institucion" wire:model="form.valor" first-error-only/>
           
         
            <x-slot:actions>
                <x-mary-button label="Cancel" @click="$wire.modalInst= false"/>
                <x-mary-button label="Agregar" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>

</div>
