<div>
    <div id="authentication-modal" aria-hidden="true" class="overflow-y-auto overflow-x-hidden z-50 justify-center items-center h-modal md:h-full md:inset-0">
        <div class="relative p-9 w-7/12 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative  rounded-lg shadow bg-gray-700">
                <div class="flex justify-end p-2">
                    <button wire:click="$set('vista','default')"  type="button" class="text-gray-400 bg-transparent  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-800 hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                
                <form class="px-20 pb-10 space-y-10 lg:px-8 sm:pb-8 xl:pb-10" >

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Name</label>
                        <input type="text" wire:model="name" class="bg-gray-50 border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  border-gray-500  placeholder-gray-400  text-gray-800" placeholder="name@company.com" required>
                    </div>

                    <div>
                        <label for="rol" class="block mb-2 text-sm font-medium text-gray-300">Rol</label>

                        <select name="rol" wire:model="rol" class="bg-gray-50 border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500  placeholder-gray-400  text-gray-800">
                            <option selected value="user">Please select</option>
                            <option value="user"> User</option>
                            <option value="admin">Admin</option>
                            <option value="mod" > Mod</option>
                        </select>
                    </div>

                    <div class="justify-around" >
                        <button wire:click="update" type="button" class=" focus:ring-4 focus:ring-gray-300 rounded-lg border  text-sm font-medium px-5 py-2.5  focus:z-10  bg-gray-700  text-gray-300  border-gray-500  hover:text-white  hover:bg-gray-600">Update</button>
                        <button wire:click="$set('vista','default')" type="button" class=" focus:ring-4 focus:ring-gray-300 rounded-lg border  text-sm font-medium px-5 py-2.5  focus:z-10  bg-gray-700  text-gray-300  border-gray-500  hover:text-white  hover:bg-gray-600">No, cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div> 


</div>