<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calculator</title>
</head>
<body>
    <h1>Laravel Calculator</h1>
    <form action="{{ route('calculate') }}" method="POST">
        @csrf
        <input type="number" name="num1" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>
    @if(isset($result))
        <p>Result: {{ $result }}</p>
    @endif
</body>
</html>