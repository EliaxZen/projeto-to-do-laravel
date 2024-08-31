<x-layout>
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
            <div class="task">
                <div class="title">
                    <input class="title_checkbox" type="checkbox">
                    <div class="task_title">Titulo da Tarefa</div>
                </div>
                <div class="priority">
                    <div class="sphere"></div>
                    <div>prioridade</div>
                </div>
                <div class="actions">
                    <a href="#">
                        <img src="/assets/images/icon-edit.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/assets/images/icon-delete.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
