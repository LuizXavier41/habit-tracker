<x-layout>
    <main>

        {{ $name }}

        @foreach ($subjects as $s)
            <li class=" text-amber-500">{{ $s }}</li>
        @endforeach

    </main>
</x-layout>
