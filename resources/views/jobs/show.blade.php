<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }}</title>
</head>
<body>
    <p><a href="/">Home</a> | <a href="/jobs">Jobs</a></p>
    
    <h1>{{ $job->title }}</h1>
    <p>Salary: ${{ number_format($job->salary, 2) }}</p>

    <a href="/jobs">
        <button>Back to Job List</button>
    </a>
</body>
</html>