<div>
    <h1>JOB BOARD</h1>

    
    <h2>  
        Moayed Mohammed
    
        </h2>
    
    @foreach ( $jobs as $job )
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    
    @endforeach
</div>
