<x-layout>

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <hr class="linha_header" />
            <div class="graph_header_date">
                <img src="/assets/images/icon-prev-orange.png" alt="">
                12 de outubro
                <img src="/assets/images/icon-next-orange.png" alt="">

            </div>
        </div>
        <div class="graph_header_subtitle">Tarefas: <b>3/6</b></div>
        <div class="graph_box">

            <div class="graph_placeholder"></div>

            <div class="tasks_left_footer">
                <img src="/assets/images/icon-info-orange.png" alt="" />
                Restam 3 tarefas para serem realizadas
            </div>

        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <div class="list_header_select-container">
                <select class="list_header_select" name="" id="">
                    <option value="1">Todas as tarefas</option>
                </select>
            </div>
        </div>
        <div class="task_list">
            @php
                $tasks = [
                    [
                        'id' => 1,
                        'done' => false,
                        'title' => 'Minha primeira task',
                        'category' => 'Categoria 1',
                    ],
                    [
                        'id' => 2,
                        'done' => true,
                        'title' => 'Minha segunda task',
                        'category' => 'Categoria 2',
                    ],
                ];
            @endphp
            <x-task :data=$tasks[0]/>
            <x-task :data=$tasks[1]/>

        </div>
    </section>
</x-layout>
