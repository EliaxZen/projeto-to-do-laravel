<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900 display=swap"rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img class="logo" src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do Dia</h2>
                        <hr class="linha_header" />
                        <div class="graph_header_date">Data</div>
                    </div>
                    <div class="graph_header_subtitle">Tarefas: <b>3/6</b></div>
                    <div class="graph_box">

                        <div class="graph_placeholder"></div>

                        <div class="tasks_left_footer">
                            <img src="/assets/images/icon-info-orange.png" alt=""/>
                            Restam 3 tarefas para serem realizadas
                        </div>

                    </div>
                </section>
                <section class="list">
                    <div class="list_header">
                        <select class="list_header_select" name="" id="">
                            <option value="1">Todas as tarefas</option>
                        </select>
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
            </main>
        </div>
    </div>
</body>

</html>
