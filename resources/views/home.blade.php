<x-layout>
    <main class="py-10">

<h1>HABIT TRACKER</h1>

<div class="flex flex-col">
@auth
    Bem vindo(a), {{auth()->user()->name}}!
@endauth
</div>
    </main>
</x-layout>
