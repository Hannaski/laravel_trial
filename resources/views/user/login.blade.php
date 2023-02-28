@include('partials.header')

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Employee LogIn</h1>
        </a>
    </header>
    <main class="bg-white mx-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section class="font-bold text-2xl">
        <h3>Welcome to my world -viper</h3>
        <p class="text-gray-400 pt-2">SignIn your Account</p>
    </section>
    <section class="mt-10">
        <form action="/login/process" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm text-bold ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm text-bold ml-3">Password</label>
                <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded whadow-lg hover:shadow-1xl transition duration-200" type="submit">LogIn</button>
        </form>
    </section>
</main>
@include('partials.footer')
