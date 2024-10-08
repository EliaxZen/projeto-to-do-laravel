<x-layout>

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{ route('logout') }}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <hr class="linha_header" />
            <div class="graph_header_date">
                <a href="{{ route('home', ['date' => $date->copy()->subDay()->toDateString()]) }}">
                    <img src="/assets/images/icon-prev-orange.png" alt="Anterior">
                </a>
                {{ $date->translatedFormat('d \d\e F') }}
                <a href="{{ route('home', ['date' => $date->copy()->addDay()->toDateString()]) }}">
                    <img src="/assets/images/icon-next-orange.png" alt="Próximo">
                </a>
            </div>
        </div>
        <div class="graph_header_subtitle">Tarefas: <b>{{ $tasks_count - $undone_tasks_count }}/{{ $tasks_count }}</b>
        </div>
        <div class="graph_box">

            <div class="graph_placeholder">
                <svg width="100%" height="100%" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <!-- Gradiente de cor para o círculo de progresso -->
                    <defs>
                        <linearGradient id="progressGradient" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#EF3B2D;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#f5490b;stop-opacity:1" />
                        </linearGradient>
                        <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="0" stdDeviation="5" flood-color="#EF3B2D"
                                flood-opacity="0.5" />
                        </filter>
                    </defs>

                    <!-- Círculo de fundo -->
                    <circle cx="100" cy="100" r="90" fill="none" stroke="#f1f1f1" stroke-width="20" />

                    <!-- Círculo de progresso com gradiente e sombra -->
                    <circle cx="100" cy="100" r="90" fill="none" stroke="url(#progressGradient)"
                        stroke-width="20" stroke-dasharray="310" stroke-dashoffset="140"
                        transform="rotate(-90 100 100)" />

                    <!-- Texto de porcentagem -->
                    <text x="50%" y="50%" text-anchor="middle" fill="#EF3B2D" font-size="40px" dy="5px"
                        font-family="Arial" font-weight="bold">
                        55%
                    </text>

                    <!-- Texto "Completo" -->
                    <text x="50%" y="63%" text-anchor="middle" fill="#555" font-size="20px" dy="5px"
                        font-family="Arial" font-weight="bold">
                        Completo
                    </text>
                </svg>
            </div>

            <div class="tasks_left_footer">
                <img src="/assets/images/icon-info-orange.png" alt="" />
                Restam {{ $undone_tasks_count }} tarefas para serem realizadas.
            </div>

        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <div class="list_header_select-container">
                <select class="list_header_select" onChange="changeTaskStatusFilter(this)">
                    <option value="all_task">Todas as tarefas</option>
                    <option value="task_pending">Tarefas Pendentes</option>
                    <option value="task_done">Tarefas Realizadas</option>
                </select>
            </div>
        </div>
        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
    <script>
        function changeTaskStatusFilter(e) {
            // Primeiro, mostra todas as tarefas
            document.querySelectorAll('.task').forEach(function(element) {
                element.style.display = 'flex'; // ou 'block', dependendo do layout
            });

            if (e.value == 'task_pending') {
                // Esconde as tarefas concluídas
                document.querySelectorAll('.task_done').forEach(function(element) {
                    element.style.display = 'none';
                });
            } else if (e.value == 'task_done') {
                // Esconde as tarefas pendentes
                document.querySelectorAll('.task_pending').forEach(function(element) {
                    element.style.display = 'none';
                });
            }
        }
    </script>


    <script>
        async function taskUpdate(element) {
            let status = element.checked;
            let taskId = element.dataset.id;
            let url = '{{ route('task.update') }}';
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'accept': 'application/json',
                },
                body: JSON.stringify({
                    status,
                    taskId,
                    _token: '{{ csrf_token() }}'
                })
            });
            let result = await rawResult.json();
            if (result.success) {
                console.log('Task updated successfully');
            } else {
                element.checked = !status;
            }
        }
    </script>
</x-layout>
