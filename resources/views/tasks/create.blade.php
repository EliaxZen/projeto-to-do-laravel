<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <x-form.text_input name="title" label="Titulo da Task" required="required"
                placeholder="Digite o título da sua task" />
            <x-form.text_input name="due_date" label="Data de Realização" required="required" type="date" />
            <x-form.select_input name="category" label="Categoria" required="required">
                <option value="1">Valor qualquer</option>
            </x-form.select_input>
            <x-form.text_area_input name="description" placeholder="Digite uma descrição para sua tarefa" />
            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>
        </form>
    </section>
</x-layout>
