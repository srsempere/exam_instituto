<x-app-layout>
    <form method="POST" action="{{ route('alumnos.update', ['alumno' => $alumno]) }}">
        @csrf
        @method('PUT')
        <!-- Nombre del libro -->
        <div>
            <x-input-label for="nombre" :value="__('Nombre')" />
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $alumno->nombre)" required autofocus autocomplete="nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Editar') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
