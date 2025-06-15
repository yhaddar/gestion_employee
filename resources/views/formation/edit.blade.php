@extends('welcome')
@section('title', 'formation')
@section('body')
<div class="max-w-3xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Modifier la formation : {{ $formation->nom }}
    </h2>

    <form action="{{  route('formation.update', $formation->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        @method('PUT')

        <div class="col-span-2">
            <label for="nom" class="block text-sm font-semibold text-gray-600 mb-1">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom', $formation->nom ?? '') }}"
                class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <div class="col-span-2">
            <label for="description" class="block text-sm font-semibold text-gray-600 mb-1">Description</label>
            <textarea name="description" id="description" rows="4"
                class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">{{$formation->description}}</textarea>
        </div>

        <div class="col-span-2">
            <label for="employee_id" class="block text-sm font-semibold text-gray-600 mb-1">Employé</label>
            <select name="employee_id" id="employee_id"
                class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                <option value="">-- Choisir un employé --</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}"
                        {{ $formation->employee_id == $employee->id ? 'selected' : '' }}>
                        {{ $employee->nom }} {{ $employee->prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="date_debut" class="block text-sm font-semibold text-gray-600 mb-1">Date de début</label>
            <input type="date" name="date_debut" id="date_debut"
                    value="{{ \Carbon\Carbon::parse($formation->date_debut)->format('Y-m-d') }}"
                class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <div>
            <label for="date_fin" class="block text-sm font-semibold text-gray-600 mb-1">Date de fin</label>
            <input type="date" name="date_fin" id="date_fin"
                 value="{{ \Carbon\Carbon::parse($formation->date_fin)->format('Y-m-d') }}"
                class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <div class="col-span-2">
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-3 px-6 rounded-xl hover:bg-indigo-700 transition">
                Enregistrer Formation
            </button>
        </div>
    </form>
</div>
@endsection
