<div class="mb-4">
    <x-label for="name" value="{{ __('Nombre del cliente') }}" />
    <x-input
        id="name"
        class="block mt-1 w-full"
        type="text"
        name="name"
        :value="old('name')"
        required
        autofocus
        wire:model="name"
    />
    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
</div>
<div class="mb-4">
    <x-label for="phone" value="{{ __('Número de Telefono') }}" />
    <x-input
        id="phone"
        class="block mt-1 w-full"
        type="text"
        name="phone"
        :value="old('phone')"
        required
        x-mask="9999-9999"
        autofocus
        wire:model="phone"
    />
    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
</div>
<div class="mb-4">
    <x-label for="email" value="{{ __('Correo Electronico') }}" />
    <x-input
        id="email"
        class="block mt-1 w-full"
        type="email"
        name="email"
        :value="old('email')"
        wire:model="email"
    />
    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
</div>
<div class="mb-4">
    <x-label for="address" value="{{ __('Dirección') }}" />
    <x-input
        id="address"
        class="block mt-1 w-full"
        type="text"
        name="address"
        :value="old('address')"
        wire:model="address"
    />
    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
</div>
