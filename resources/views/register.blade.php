<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1><Registrar-se></Registrar-se></h1>
        <form action="{{ route('user.register_action') }}" method="POST">
            @csrf
            <x-form.text_input name="name" label="Nome" required="required"
                placeholder="Seu nome" />
            <x-form.text_input type="email" name="email" label="Email" placeholder="Seu email" required="required"/>
            <x-form.text_input type="password" name="password" label="Senha" placeholder="Sua senha" required="required"/>
            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>
</x-layout>
