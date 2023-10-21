<div>
    <x-button wire:click="$set('open', true)">
        Crear Nuevo cliente
    </x-button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Creación de cliente
        </x-slot>

        <x-slot name="content">
            <x-validation-errors />

            @include('livewire.partials.inputs')
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="$set('open', false)" wire:loading.attr="disabled">
                Cancelar
            </x-danger-button>

            <x-secondary-button class="ml-2" wire:click="createClient" wire:loading.attr="disabled">
                Crear
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>
</div>
