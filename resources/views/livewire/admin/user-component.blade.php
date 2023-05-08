<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
            <div class="flex items-center mr-4">
                <div class="ml-4">
                    <a href="{{route('admin.users.create')}}" de aqui quiero que lleve a un nuevo formulario donde quiero crear un nuevo usuario
                        class="inline-flex items-center px-4 py-3 bg-blue-900 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                        {{ __('Crear Nuevo Usuario') }}
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
    

    <div class="container py-12">
        <x-table-responsive>
            <div class="px-6 py-4">
                <x-jet-input wire:model="search" type="text" class="w-full" placeholder="Escriba algo para filtrar" />

            </div>

            @if (count($users))
                
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rol
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($users as $user)

                            <tr wire:key="{{$user->email}}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">
                                        {{$user->id}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">
                                        {{$user->name}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$user->email}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="text-sm text-gray-900">
                                        
                                        @if (count($user->roles))
                                            Admin
                                        @else
                                            No tiene rol
                                        @endif

                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    
                                    <label>
                                        <input {{count($user->roles) ? 'checked' : ''}} value="1" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        Si
                                    </label>

                                    <label class="ml-2">
                                        <input {{count($user->roles) ? '' : 'checked'}} value="0" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        No
                                    </label>
                                </td>
                            </tr>

                        @endforeach
                        <!-- More people... -->

                        
                    </tbody>
                </table>

            @else
                <div class="px-6 py-4">
                    No hay ningún registro coincidente
                </div>
            @endif

            @if ($users->hasPages())
                    
                <div class="px-6 py-4">
                    {{$users->links()}}
                </div>

            @endif
        </x-table-responsive>
    </div>
</div>
