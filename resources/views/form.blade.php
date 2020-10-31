<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('submit')}}" method="POST">
        @csrf
        <input type="text" class="@error('name') is-invalid @enderror" value="{{ @old('name')}}" name="name">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" class="@error('password') is-invalid @enderror" name="password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>