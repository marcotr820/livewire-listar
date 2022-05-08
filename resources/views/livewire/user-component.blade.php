<div>
    <h3>hola desde livewire</h3>

    <div class="relative overflow-x-auto shadow-md mx-5">
        <div>
            <label for="password" class="block mb-2 text-sm font-medium">Busqueda</label>
            <input wire:model="search" 
                id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="buscar...">
        </div>
        @if ($users->count())
            <table class="mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">token</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="p-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $user->id }}
                            </th>
                            <td class="p-2 dark:text-white">
                                {{ $user->email }}
                            </td>
                            <td class="p-2 dark:text-white">
                                {{ $user->name }}
                            </td>
                            <td class="p-2">
                                {{ $user->password }}
                            </td>
                            <td class="p-2 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $user->remember_token }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-gray-500 p-2">no hay resultados</div>
        @endif
    </div>

</div>
