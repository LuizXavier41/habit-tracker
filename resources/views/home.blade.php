<main>
    <h1>PÁGINA INICIAL HOME</h1>
    {{ $name }}

    @foreach ($subjects as $s)
        <li>{{ $s }}</li>
    @endforeach

</main>


