<h1>
    The List Of Task
</h1>

<div>
    {{--@if (count($tasks))--}}
    @forelse($tasks as $task)
    <div>{{$task->title}}</div>
    @empty
    <div>There are no task!</div>
    @endforelse
    
    {{--@endif--}}
</div>