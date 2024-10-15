<div style="text-align: center">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-mary-header title="Instituciones" subtitle="ABM de instituciones.">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-plus" class="btn-primary" @click="$wire.modalInst= true"/>{{-- @clic abre el modal --}}
        </x-slot:actions>
    </x-mary-header>

    {{-- You can use any `$wire.METHOD` on `@row-click` --}}
    <x-mary-table :headers="$headers" :rows="$instituciones" striped @row-click="alert($event.detail.name)">


    </x-mary-table>

    <x-mary-modal wire:model="modalInst" class="backdrop-blur">
        <div class="mb-5">Press `ESC`, click outside or click `CANCEL` to close.</div>
        <x-button label="Cancel" @click="$wire.modalInst = false" />
    </x-mary-modal>

</div>
