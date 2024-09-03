<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Login</h1>

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

        <form action="{{ route('user.login_action') }}" method="POST">
            @csrf

            {{-- Campo Email --}}
            <x-form.text_input 
                type="email" 
                name="email" 
                label="Email" 
                placeholder="Seu email" 
                required="required"
                value="{{ old('email') }}" {{-- Mantém o valor anterior --}}
            />
            @error('email')
                <span class="text-danger">{{ $message }}</span> {{-- Mensagem de erro específica para o campo --}}
            @enderror

            {{-- Campo Senha --}}
            <x-form.text_input 
                type="password" 
                name="password" 
                label="Senha" 
                placeholder="Sua senha" 
                required="required"
            />
            @error('password')
                <span class="text-danger">{{ $message }}</span> {{-- Mensagem de erro específica para o campo --}}
            @enderror

            <x-form.form_button resetTxt="Limpar" submitTxt="Entrar" />
        </form>
    </section>
</x-layout>
