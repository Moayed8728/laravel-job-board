<div>
    <h1>JOB BOARD</h1>
    @foreach ( $jobs as $job )
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    
    @endforeach
</div>
