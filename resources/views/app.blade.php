<x-layout>
    <main class="flex flex-column justify-center">
    <h1>JM</h1>
    <form action="/app" method="POST">
        @csrf
        <label for="task">New task</label>
        <br>
        <div class="form-input-div flex align-center">
        <input name="task" id="task" placeholder="Ex. Take out the trash at night" type="text" required pattern="[A-Za-z ]+">
        <button type="submit">ADD</button>
        </div>
    </form>
    <div class="task-list-table ">
        @foreach ($data as $item) 
            <div class="task-list-item flex align-center justify-between flex-wrap">
                <span>{{"#" . $item->id}}</span><span class="truncate">{{$item->task}}</span>
                <button alt="expand button task details" class="details-list-btn" id={{$item->id}}>
                    <img src={{ asset('./Icons/task-list-detail-btn.svg') }} >
                </button>
                <div class="details-menu-expanded hidden" id={{'detail-div-id'. $item->id}}>
                    <button>complete</button>
                    <button>delete</button>
                </div>

            </div>
        @endforeach
    </div>   
    </main>
</x-layout>