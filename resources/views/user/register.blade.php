@include('partials.header')

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Employee Register</h1>
        </a>
    </header>
    <main class="bg-white mx-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section class="font-bold text-2xl">
        <h3>Welcome Employee</h3>
        <p class="text-gray-600 pt-2">sign in </p>
    </section>
    <section class="mt-10">
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm-Password</label>
                <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded whadow-lg hover:shadow-1xl transition duration-200" type="submit">Sign Up</button>
        </form>
    </section>
</main>
@include('partials.footer')