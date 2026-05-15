<x-layout>
    <main class="py-10">
        <h1 class="text-3xl font-bold underline text-green-500">Aoba brasil!!!</h1>
        <h2>Hello {{ $name }}</h2>
        <ul>
            @foreach ($habits as $habit)
            <li>{{ $habit }}</li>
            @endforeach
        </ul>
    </main>
</x-layout>