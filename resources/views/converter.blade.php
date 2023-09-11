<!DOCTYPE html>
<html>
<head>
    <title>Number Converter</title>
</head>
<body>
    <h1>Number Converter</h1>
    
    <form method="POST" action="{{ route('convert') }}">
        @csrf
        <input type="text" name="input" placeholder="Enter written number">
        <button type="submit">Convert</button>
    </form>

    @if(isset($result))
        <h2>Result:</h2>
        <p>Input: {{ $input }}</p>
        <p>Result: {{ $result }}</p>
    @endif
</body>
</html>
