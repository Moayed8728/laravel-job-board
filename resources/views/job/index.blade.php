<div>
    <h1>JOB BOARD</h1>

    
    <h2>  
        Hi, I’m Moayed — a Software Engineering student at Universiti Teknologi Malaysia (UTM) with a 
          passion for building modern, efficient, and user-friendly digital solutions.
          I enjoy working with technologies like C++, Java, PHP, and Laravel, and I’m continuously
          exploring new tools to sharpen my skills.
          My interests span across web development, system design, and problem-solving, 
          and I aim to combine creativity with technical expertise to deliver impactful projects.
    
        </h2>
    
    @foreach ( $jobs as $job )
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    
    @endforeach
</div>
