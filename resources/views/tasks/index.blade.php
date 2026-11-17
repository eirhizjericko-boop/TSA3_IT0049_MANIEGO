@extends('layouts.app', ['title' => 'Tasks for Today | All Tasks'])

@section('content')
<section class="page-heading">
    <p class="eyebrow">TASK MANAGEMENT</p>
    <h1>Every task,<br><span>in order.</span></h1>
    <p class="lead">A complete list of tasks arranged by their scheduled date.</p>
</section>

<section class="task-panel">
    <div class="panel-heading"><h2>Task list</h2><span>{{ $tasks->count() }} total</span></div>
    @foreach ($tasks as $task)
        <div class="task-row">
            <span class="task-date">{{ $task->task_date->format('M d') }}</span>
            <span class="task-title">{{ $task->title }}</span>
            <span class="task-status">{{ ucfirst($task->status) }}</span>
        </div>
    @endforeach
</section>
@endsection
