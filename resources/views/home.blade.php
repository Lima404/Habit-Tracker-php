<h1>Welcome to the Home Page</h1>
<h2>Hello {{ $name }}</h2>
<ul>
    @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>