<!DOCTYPE html>
<html>
<head><title>Available Jobs</title></head>
<body>
    <p><a href="/">Home</a> | <a href="/jobs">Jobs</a></p>
    <h1>Available Jobs</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}">
                    {{ $job->title }} - ${{ number_format($job->salary, 2) }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>