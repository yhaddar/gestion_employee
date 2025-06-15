@extends('welcome')
@section('title', 'employee')

@section('body')
<div class="max-w-2xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Détails de l'employé</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Nom -->
        <div>
            <p class="text-sm text-gray-500">Nom</p>
            <p class="text-lg font-semibold text-gray-800">{{ $employee->nom }}</p>
        </div>

        <!-- Prénom -->
        <div>
            <p class="text-sm text-gray-500">Prénom</p>
            <p class="text-lg font-semibold text-gray-800">{{ $employee->prenom }}</p>
        </div>

        <!-- Email -->
        <div class="sm:col-span-2">
            <p class="text-sm text-gray-500">Email</p>
            <p class="text-lg font-semibold text-gray-800">{{ $employee->email }}</p>
        </div>

        <!-- Poste -->
        <div>
            <p class="text-sm text-gray-500">Poste</p>
            <p class="text-lg font-semibold text-gray-800">{{ $employee->post }}</p>
        </div>

        <!-- Date d'embauche -->
        <div>
            <p class="text-sm text-gray-500">Date d'embauche</p>
            <p class="text-lg font-semibold text-gray-800">
                {{ \Carbon\Carbon::parse($employee->date_embauche)->format('d/m/Y') }}
            </p>
        </div>

        <div class="sm:col-span-2">
            <p class="text-sm text-gray-500">Salaire</p>
            <p class="text-lg font-semibold text-gray-800">{{ number_format($employee->salaire, 2, ',', ' ') }}</p>
        </div>
    </div>


    <div class="mt-8 text-center">
        <a href="{{ route('employee.index') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
            Retour à la liste
        </a>
    </div>
</div>

<div class="container mx-auto my-5">
      <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">ID</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Nom</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Description</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Date debut</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Date fin</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Employee</th>
          <th class="px-6 py-3">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-100">

        @foreach($employee->formation as $formation)

        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $formation->id }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ $formation->nom }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ Str::substr($formation->description, 0, 30) }}...</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($formation->date_debut)->format("Y-m-d") }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($formation->date_fin)->format("Y-m-d") }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ Str::substr($formation->employee->nom, 0, 1) }}.{{ $formation->employee->prenom }}</td>

          <td class="px-6 py-4 text-sm text-indigo-600 flex gap-[10px]">
            <a href="{{ route('formation.show', $formation->id) }}"><i class="fa-solid fa-eye text-blue-500 text-[22px] cursor-pointer"></i></a>
            <a href="{{ route('formation.edit', $formation->id) }}"><i class="fa-solid fa-pen-to-square text-yellow-500 text-[22px] cursor-pointer"></i></a>

            <form action="{{ route('formation.destroy', $formation->id) }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" onclick="return confirm('you are sure ?')">
                    <i class="fa-solid fa-trash text-red-500 text-[22px] cursor-pointer"></i>
                </button>
            </form>

          </td>
        </tr>

        @endforeach


      </tbody>
    </table>
  </div>
</div>
@endsection
