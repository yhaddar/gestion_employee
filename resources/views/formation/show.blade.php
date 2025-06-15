@extends('welcome')
@section('title', 'formation')
@section('body')
<div class="max-w-2xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Détails de l'employé</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <p class="text-sm text-gray-500">Nom</p>
            <p class="text-lg font-semibold text-gray-800">{{ $formation->nom }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Employee</p>
            <p class="text-lg font-semibold text-gray-800">{{ $formation->employee->nom }} {{ $formation->employee->prenom }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Date d'embauche</p>
            <p class="text-lg font-semibold text-gray-800">
                {{ \Carbon\Carbon::parse($formation->date_debut)->format('d/m/Y') }}
            </p>
        </div>

                <div>
            <p class="text-sm text-gray-500">Date d'embauche</p>
            <p class="text-lg font-semibold text-gray-800">
                {{ \Carbon\Carbon::parse($formation->date_fin)->format('d/m/Y') }}
            </p>
        </div>
    </div>

        <div class="my-5">
            <p class="text-sm text-gray-500">Description</p>
            <p class="text-lg font-semibold text-gray-800">{{ $formation->description }}</p>
        </div>

    <!-- Back Button -->
    <div class="mt-8 text-center">
        <a href="{{ route('formation.index') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
            Retour à la liste
        </a>
    </div>
</div>
@endsection
