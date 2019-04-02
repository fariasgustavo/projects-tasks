@include("commons.header")

<section id="edit-project">

    

    <div class="tasks">

        <h2>Tasks</h2>

        <table class="table table-striped table-dark">
            <thead>
                <th>Description</th>
                <th>Status</th>
            </thead>

            @foreach($tasks as $task)
                <tr>
                    <a href="{{url("tasks/$task->id")}}">
                        <td>
                            <p>{{ $task->description }}</p>
                        </td>

                        <td>
                            <span class="{{ $task->description == true ? 'active' : ''}}"></span>
                        </td>
                    </a>
                </tr>
            @endforeach
        </table>
    </div>
</section>

@include("commons.footer")