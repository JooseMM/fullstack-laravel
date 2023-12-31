<x-layout>
    <main class="flex flex-column justify-center">
    <h1>JM</h1>
    <form action="/app" method="POST">
        @csrf
        <label for="task">New task</label>
        <br>
        <div class="form-input-div flex center">
        <input name="task" id="task" placeholder="Ex. Take out the trash at night" type="text" required pattern="[A-Za-z ]+">
        <button type="submit">ADD</button>
        </div>
    </form>
    <div class="task-list-table ">
        @foreach ($data as $item) 
            {{-- <div class="task-list-container flex center ">
                
                <span id={{'fix-span-'. $item->id}}>{{"#" . $item->id}}</span>
                <div class="task-info-container flex center justify-between">
                    <span class="truncate" id={{'task-' . $item->id}}>{{$item->task}}</span>                
                    <button alt="expand button task details" class="details-list-btn-mobile" id={{$item->id}} >
                        <img src={{ asset('./Icons/task-list-detail-btn.svg') }} >
                    </button>
                    <div class="details-expanded-container flex justify-end hidden" id={{"details-menu-" . $item->id}}>
                        <div class="details-menu-container flex center">
                            <button><img src={{asset("./Icons/delete-icon-task.svg")}} alt=""></button>
                            <button><img src={{asset("./Icons/done-icon-task.svg")}} alt=""></button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="task-list-container || flex center">
                 <span id={{'fix-span-'. $item->id}}>{{"#" . $item->id}}</span>
                 <div class="task-info-container || flex justify-between center ">
                    <span class="" id={{'task-' . $item->id}}>{{$item->task}}</span>    
                    <button alt="expand button task details" class="details-list-btn-mobile hidden" id={{$item->id}} ><img src={{ asset('./Icons/task-list-detail-btn.svg') }} ></button>   
                </div>       
                <div class="details-menu-container flex center ">
                    <button><img src={{asset("./Icons/delete-icon-task.svg")}} alt=""></button>
                    <button><img src={{asset("./Icons/done-icon-task.svg")}} alt=""></button>
                    <button alt="expand button task details" class="details-list-btn-mobile" id={{$item->id}} ><img src={{ asset('./Icons/task-list-detail-btn.svg') }} ></button>   
                </div>  
            </div>
        @endforeach
    </div>   
    </main>
</x-layout>