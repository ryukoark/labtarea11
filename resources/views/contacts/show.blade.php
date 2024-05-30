<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="bg-white p-6 rounded-lg shadow-md flex">
            <div class="flex-1">
                <h2 class="text-2xl font-bold mb-2">{{ $contact->first_name }} {{ $contact->last_name }}</h2>
                <p class="text-gray-600 mb-4">{{ $contact->email }}</p>
                <p class="text-gray-600">{{ $contact->phone }}</p>
                <p class="text-gray-600">Edad: {{ $contact->edad }}</p>
                <p class="text-gray-600">Oficio: {{ $contact->oficio }}</p>
                <p class="text-gray-600">Apodo: {{ $contact->apodo }}</p>
            </div>
            <div class="w-48 flex-shrink-0">
                @if($contact->imagen)
                    <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('storage/images/' . $contact->imagen) }}" alt="Imagen de {{ $contact->first_name }}">
                @else
                    <p class="text-gray-600">No hay imagen disponible</p>
                @endif
            </div>
        </div>
        <div class="mt-4">
            <x-secondary-button onclick="location.href='{{ route('contacts.edit', ['contact' => $contact->id]) }}'">Editar</x-secondary-button>
        </div>
        <div class="mt-4">
            <x-secondary-button onclick="location.href='{{ route('contacts.index') }}'">Volver</x-secondary-button>
        </div>
    </div>
</x-app-layout>
