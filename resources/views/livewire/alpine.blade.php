<div>
    <h1 class="text-3xl mb-3 underline">Comunicación Livewire y Alpinejs</h1>

    <h2 class="text-1xl mb-1 font-bold">Ejemplo1: (wire) </h2>
    <p><span class="font-semibold underline ">Descripción:</span> Solo se incrementa el contador de alpinejs</p>
    Contador Livewire : {{ $count1 }}
    <br>
    <div x-data="{ count1 : $wire.count1 }">
        <p>Contador Alpine: <span x-text="count1"></span></p>
        <button @click="count1++" class="p-2 bg-gray-500 rounded"> Sumar Alpine +1</button>
    </div>
    
    <br>

    <h2 class="text-1xl mb-1 font-bold">Ejemplo2: (entangle) </h2>
    <p><span class="font-semibold underline ">Descripción:</span> Se incrementa tanto el contador de alpinejs como livewire, solo que con un pequeño retrazo</p>
    Contador Livewire : {{ $count2 }}
    <div x-data="{ count2 : @entangle('count2') }">
        <p>Contador Alpine: <span x-text="count2"></span></p>
        <button @click="count2++" class="p-2 bg-gray-500 rounded">Sumar Alpine +1</button>
    </div>

    

    <br>

    <h2 class="text-1xl mb-1 font-bold">Ejemplo3:  </h2>
    <p><span class="font-semibold underline ">Descripción:</span> Se incrementa de los dos lados</p>
    Contador Livewire : {{ $count3 }}<br>
    <button class="p-2 bg-gray-500 rounded" wire:click='increment'>Sumar Livewire +1 </button>
    <div x-data="{ count3 : @entangle('count3') }">
        <p>Contador Alpine: <span x-text="count3"></span></p>
        <button @click="count3++" class="p-2 bg-gray-500 rounded">Sumar Alpine +1</button>
    </div>

</div>
