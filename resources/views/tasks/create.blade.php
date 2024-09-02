<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="{{ route('task.create_action') }}" method="POST">
            @csrf

            <x-form.text_input name="title" label="Titulo da Task" required="required"
                placeholder="Digite o título da sua task" />
            <x-form.text_input name="due_date" label="Data de Realização" required="required" type="date" />
            <x-form.select_input name="category_id" label="Categoria" required="required">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.text_area_input name="description" label="Descrição da Tarefa"
                placeholder="Digite uma descrição para sua tarefa" />
            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />
        </form>
    </section>
</x-layout>
