<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>

        {{-- Alerta global de erros --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.register_action') }}" method="POST">
            @csrf

            {{-- Campo Nome --}}
            <x-form.text_input 
                name="name" 
                label="Nome" 
                required="required"
                placeholder="Seu nome"
                value="{{ old('name') }}" {{-- Mantém o valor anterior --}}
            />

            {{-- Campo Email --}}
            <x-form.text_input 
                type="email" 
                name="email" 
                label="Email" 
                placeholder="Seu email" 
                required="required"
                value="{{ old('email') }}"
            />

            {{-- Campo Senha --}}
            <x-form.text_input 
                type="password" 
                name="password" 
                label="Senha" 
                placeholder="Sua senha" 
                required="required"
            />

            {{-- Campo Confirmação de Senha --}}
            <x-form.text_input 
                type="password" 
                name="password_confirmation" 
                label="Confirme sua senha" 
                placeholder="Confirme sua senha" 
                required="required"
            />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>
</x-layout>
