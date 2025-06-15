@extends("welcome")

@section('title', 'employee')


@section("body")

<div class="mx-auto p-6 bg-white rounded-lg shadow">
  <div class="flex items-center justify-between mb-4">
    <div>
      <h2 class="text-lg font-semibold text-gray-800">Employees</h2>
    </div>
    <a href="{{ route('employee.create') }}" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-700">
      nouvelle employee
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">ID</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Prenom</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Nom</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Email</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Post</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Date d'embauche</th>
          <th class="px-6 py-3 text-left text-sm uppercase font-bold">Salaire</th>
          <th class="px-6 py-3">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-100">

        @foreach($employees as $employee)

        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $employee->id }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ $employee->prenom }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ $employee->nom }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">
            <a href="mailto:{{ $employee->email }}" target="_blank">{{ $employee->email }}</a>
          </td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ $employee->post }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($employee->date_embauche)->format("Y-m-d") }}</td>
          <td class="px-6 py-4 text-sm text-gray-500">{{ $employee->salaire }}</td>

          <td class="px-6 py-4 text-sm text-indigo-600 flex gap-[10px]">
            <a href="{{ route('employee.show', $employee->id) }}"><i class="fa-solid fa-eye text-blue-500 text-[22px] cursor-pointer"></i></a>
            <a href="{{ route('employee.edit', $employee->id) }}"><i class="fa-solid fa-pen-to-square text-yellow-500 text-[22px] cursor-pointer"></i></a>

            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
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