<div class="task">
    <div class="title">
        <input class="title_checkbox" type="checkbox" @if ($data && $data['done']) checked @endif />
        <div class="task_title">{{ $data['title'] ?? '' }}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category'] ?? '' }}</div>
    </div>
    <div class="actions">
        <a href="https://meusite.com/tasks/edit/{{ $data['id'] ?? '' }}">
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="https://meusite.com/tasks/delete/{{ $data['id'] ?? '' }}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>
