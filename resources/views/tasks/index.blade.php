<x-layout>
    <div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Note</th>
                <th>Stato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->note}}</td>
                    <td>
                    @if(!$task->completed)
                        <form action="{{ route('tasks.complete', $task->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success" type="submit">Completato</button>
                        </form>
                    @else
                    <p><strong>Completato!</strong></p>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-layout>