@extends("layout")
@section('title', 'employee')

@section('body')
<div class="max-w-3xl mx-auto p-8 bg-gray-50 rounded-2xl shadow-lg mt-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nouvel Employé</h2>

    <form action="{{ route('employee.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <!-- Nom -->
        <div class="flex flex-col">
            <label for="nom" class="mb-2 text-sm font-semibold text-gray-600">Nom</label>
            <input type="text" name="nom" id="nom"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Prénom -->
        <div class="flex flex-col">
            <label for="prenom" class="mb-2 text-sm font-semibold text-gray-600">Prénom</label>
            <input type="text" name="prenom" id="prenom"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Email -->
        <div class="flex flex-col md:col-span-2">
            <label for="email" class="mb-2 text-sm font-semibold text-gray-600">Email</label>
            <input type="email" name="email" id="email"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Poste -->
        <div class="flex flex-col">
            <label for="post" class="mb-2 text-sm font-semibold text-gray-600">Poste</label>
            <input type="text" name="post" id="post"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Date d'embauche -->
        <div class="flex flex-col">
            <label for="date_embauche" class="mb-2 text-sm font-semibold text-gray-600">Date d'embauche</label>
            <input type="date" name="date_embauche" id="date_embauche"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Salaire -->
        <div class="flex flex-col md:col-span-2">
            <label for="salaire" class="mb-2 text-sm font-semibold text-gray-600">Salaire</label>
            <input type="number" name="salaire" id="salaire" step="0.01"
                   class="rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
        </div>

        <!-- Submit Button -->
        <div class="md:col-span-2">
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition">
                Enregistrer l'employé
            </button>
        </div>
    </form>
</div>
@endsection
