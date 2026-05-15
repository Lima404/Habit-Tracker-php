<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    {{config('app.name')}}
  </title>
  @vite(['resources/css/app.css'])
</head>

<body>
  <h1 class="text-3xl font-bold underline text-green-500">Welcome to the Home Page</h1>
  <h2>Hello {{ $name }}</h2>
  <ul>
    @foreach ($habits as $habit)
      <li>{{ $habit }}</li>
    @endforeach
  </ul>
</body>

</html>