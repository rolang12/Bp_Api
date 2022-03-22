<div>
    <h2 class="text-3xl font-bold mt-28 text-center " >Users Records </h2>
    @include('livewire.messages.success')
    @include('livewire.messages.error')
    @include('livewire.users.search')
   
    

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class=" shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Email
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Created at
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Country
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500" >
                                    View
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ( $users as $user )
                                
                                
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{$user->id}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{$user->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">{{$user->email}}</div>
                                    </td>
                                     <td class="px-6 py-4 text-sm text-gray-500">
                                        {{$user->created_at}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{$user->country}}
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-white bg-green-400 rounded">View</a>
                                    </td>
                                    <td class="px-6py-4">
                                        <button wire:click="edit({{$user->id}})" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</button>
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <button wire:click="destroy({{ $user->id }})" onclick=" return confirmDelete()" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</button>
                                    </td>
                                </tr>
                            @endforeach                      
                        </tbody>
                    </table>
                    <div> {{$users->links()}} </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete()
        {
            var respuesta = confirm("Are you sure that you want delete this post?");

            if (respuesta)
            {
                return true
            } else {

                return false
            }
        }
    </script>

</div>

{{-- <button wire:click="$set('vista', 'prueba')" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</button> --}}
