<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume PDF</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; }
        .section { margin-top: 20px; }
        .title { background: #007bff; color: white; padding: 5px; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>

    <div class="header">
        <h1>{{ $name }}</h1>
        <h3>Web Developer | PHP Laravel Developer</h3>
        <p><strong>Email:</strong> {{ $email }} | <strong>Phone:</strong> {{ $phone }}</p>
        <p><strong>Website:</strong> {{ $website }}</p>
    </div>

    <div class="section">
        <h2 class="title">Summary</h2>
        <p>{{ $summary }}</p>
    </div>

    <div class="section">
        <h2 class="title">Experience</h2>
        <ul>
            @foreach($experience as $exp)
                <li><strong>{{ $exp['role'] }}</strong> - {{ $exp['company'] }} ({{ $exp['years'] }})</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <h2 class="title">Education</h2>
        <p>{{ $education }}</p>
    </div>

    <div class="section">
        <h2 class="title">Skills</h2>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>

</body>
</html>
