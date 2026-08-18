<x-layout>
    <main class="py-10">


        <h1>FAÇA LOGIN</h1>


        <section>

            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="e-mail" class="bg-white border-amber-300 border-2 p-1">
                <input type="password" name="password" placeholder="********"
                    class="bg-white border-amber-300 border-2 p-1">
                <button type="submit" class="bg-white border-amber-300 border-2 p-1">Login</button>

            </form>
            <div>
                @error('email')
                <p class="text-red-500 text-2xl mt-1">{{$message}}</p>
                @enderror
            </div>

        </section>



    </main>
</x-layout>
