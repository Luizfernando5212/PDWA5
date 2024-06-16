<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="processar_formulario.php">
                        <!-- @csrf -->

                        <!-- autor -->
                        <div>
                            <x-input-label for="autor" :value="__('autor')" />
                            <x-text-input id="autor" class="block mt-1 w-full" type="text" name="autor"
                                :value="old('autor')" required autofocus autocomplete="autor" />
                            <x-input-error :messages="$errors->get('autor')" class="mt-2" />
                        </div>

                        <!-- genero_musical -->
                        <div class="mt-4">
                            <x-input-label for="genero_musical" :value="__('genero_musical')" />
                            <x-text-input id="genero_musical" class="block mt-1 w-full" type="text" name="genero_musical"
                                :value="old('genero_musical')" required autocomplete="genero_musical" />
                            <x-input-error :messages="$errors->get('genero_musical')" class="mt-2" />
                        </div>

                        <!-- qtd_musicas -->
                        <div class="mt-4">
                            <x-input-label for="qtd_musicas" :value="__('qtd_musicas')" />

                            <x-text-input id="qtd_musicas" class="block mt-1 w-full" type="number" name="qtd_musicas"
                                required autocomplete="qtd_musicas" />

                            <x-input-error :messages="$errors->get('qtd_musicas')" class="mt-2" />
                        </div>

                        <!-- tempo_min -->
                        <div class="mt-4">
                            <x-input-label for="tempo_min" :value="__('tempo_min')" />

                            <x-text-input id="tempo_min" class="block mt-1 w-full" type="number"
                                name="tempo_min" required autocomplete="tempo_min" />

                            <x-input-error :messages="$errors->get('tempo_min')" class="mt-2" />
                        </div>

                        <!-- data_lancamento -->
                        <div class="mt-4">
                            <x-input-label for="data_lancamento" :value="__('data_lancamento')" />

                            <x-text-input id="data_lancamento" class="block mt-1 w-full" type="date"
                                name="data_lancamento" required autocomplete="data_lancamento" />

                            <x-input-error :messages="$errors->get('data_lancamento')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> -->

                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>