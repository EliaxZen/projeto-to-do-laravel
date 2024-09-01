<x-layout page="Todo List: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <div class="input_area">
                <label for="title">Titulo da Task</label>
                <input name="title" id="title" required />
            </div>
            <div class="input_area">
                <label for="due_date">Data de Realização</label>
                <input type="date" id="due_date" name="due_date" required />
            </div>
            <div class="input_area">
                <label for="category">Categoria</label>
                <select name="category" required id="category">
                    <option selected disabled value="">Selecione a categoria</option>
                </select>
            </div>
            <div class="input_area">
                <label for="title">Descrição da tarefa</label>
                <textarea name="description" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>
        </form>
    </section>
</x-layout>
