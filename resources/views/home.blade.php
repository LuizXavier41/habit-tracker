<x-layout>
    <main class="py-10">


<div class="flex flex-col">
    {{ $name }}
    @foreach ($subjects as $s)
            <li class=" text-amber-500 p-2" >{{ $s }}</li>
        @endforeach
</div>
    </main>
</x-layout>
