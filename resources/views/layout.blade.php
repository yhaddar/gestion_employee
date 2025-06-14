<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <div class="hidden md:flex space-x-6 text-gray-700 font-medium">
                <a href="{{ route('employee.index') }}" class="hover:text-indigo-600 transition">Employés</a>
                <a href="{{ route('formation.index') }}" class="hover:text-indigo-600 transition">Formations</a>
                <a href="{{ route('contact.index') }}" class="hover:text-indigo-600 transition">Contact</a>
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <span class="hidden sm:inline text-gray-600 text-sm">Bonjour, {{ Auth::user()->name }}</span>
                    <form method="POST">
                        @csrf
                        <button type="submit"
                            class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-sm">
                            Déconnexion
                        </button>
                    </form>
                @else
                    <a 
                        class="text-sm text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg">
                        Connexion
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

 @yield("body")
    </body>
</html>
