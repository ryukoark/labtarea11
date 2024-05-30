<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('contacts.update', $contact) }}"enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first_name" class="block text-md font-medium leading-6 text-white">Nombres</label>
                    <div class="mt-2">
                        <input type="text" name="first_name" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required value="{{ old('first_name', $contact->first_name) }}">
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last_name" class="block text-md font-medium leading-6 text-white">Apellidos</label>
                    <div class="mt-2">
                        <input type="text" name="last_name" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('last_name', $contact->last_name) }}">
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="phone" class="block text-md font-medium leading-6 text-white">Número</label>
                    <div class="mt-2">
                        <input type="text" name="phone" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('phone', $contact->phone) }}" required>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="email" class="block text-md font-medium leading-6 text-white">Correo electrónico</label>
                    <div class="mt-2">
                        <input type="email" name="email" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('email', $contact->email) }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="edad" class="block text-md font-medium leading-6 text-white">Edad</label>
                    <div class="mt-2">
                        <input type="text" name="edad" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('edad', $contact->edad) }}">
                        <x-input-error :messages="$errors->get('edad')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="oficio" class="block text-md font-medium leading-6 text-white">Oficio</label>
                    <div class="mt-2">
                        <input type="text" name="oficio" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('oficio', $contact->oficio) }}">
                        <x-input-error :messages="$errors->get('oficio')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apodo" class="block text-md font-medium leading-6 text-white">Apodo</label>
                    <div class="mt-2">
                        <input type="text" name="apodo" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{ old('apodo', $contact->apodo) }}">
                        <x-input-error :messages="$errors->get('apodo')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <label for="imagen" class="block text-md font-medium leading-6 text-white">Imagen</label>
                    <div class="mt-2">
                        <input type="file" name="imagen" accept="image/*" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="mt-8 flex items-center justify-center gap-x-6">
                <x-primary-button>Guardar</x-primary-button>
                <x-secondary-button onclick="location.href='{{ route('contacts.index') }}'">Cancelar</x-secondary-button>
            </div>
        </form>
    </div>
</x-app-layout>
