<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("You're logged in!") }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{url('store')}}" method="POST">
                        @csrf
                        Ajouter une Tache :
                        <input name="Name" class="form-control lead" type="text">
                        <button class="btn btn-success">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <th>
                                <h2>Liste des Taches:</h2>
                                <br>
                            </th>
                        </thead>
                        <tbody id="tbody"> 
                        
                            @foreach ($tasks as $value)
                            <tr>
                                <td> {{$value->task_name}} </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
