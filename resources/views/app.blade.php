<x-layout>
    <main class="flex flex-column justify-center">
    <h1>JM</h1>
    <form action="/app" method="POST">
        @csrf
        <label for="task">New task</label>
        <br>
        <input name="task" id="task" placeholder="Ex. Take out the trash at night" type="text" required pattern="[A-Za-z ]+">
        <button type="submit">ADD</button>
    </form>

  {{--  @foreach ($data as $item)
    <div>
        task: {{$item['task']}}
        <button>expand</button>
             <div style="display: none" id='taskDetailsMobileDiv'>
                status: {{$item['done']}}
                <button>complete</button>
                <button>delete</button>
            </div> 
    </div>
@endforeach--}}
    @foreach ($data as $item) 

        <div>
         {{$item->task}}
        </div>
    @endforeach
    </main>
</x-layout>