@extends('layout')

@section('title', 'contact')

@section('body')

<div class="max-w-2xl mx-auto mt-12 px-6 py-8 bg-white shadow-lg rounded-2xl">
    <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Contactez-nous</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email</label>
            <input type="email" name="email" id="email"
                   class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   required>
        </div>

        <div>
            <label for="sujet" class="block text-sm font-semibold text-gray-600 mb-1">Sujet</label>
            <input type="text" name="subject" id="sujet"
                   class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   required>
        </div>

        <div>
            <label for="message" class="block text-sm font-semibold text-gray-600 mb-1">Message</label>
            <textarea name="message" id="message" rows="5"
                      class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                      required></textarea>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Envoyer
            </button>
        </div>
    </form>
</div>
@endsection
