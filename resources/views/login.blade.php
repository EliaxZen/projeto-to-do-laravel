<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('register') }}" class="btn btn-primary">
            Resgistre-se
        </a>
    </x-slot:btn>

    Tela de Login
    <a href="{{ route('home') }}">
        Ir para HOME
    </a>
</x-layout>
