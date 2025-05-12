<div>
    {{-- Page Title --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                My Form Page
            </h1>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Submit Your Information
                        </h3>
                        <form wire:submit.prevent="save">
                            {{-- We will add form fields here in the next step --}}
                            <div class="mt-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" wire:model="name" id="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                {{-- @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror --}}
                            </div>

                            <div class="mt-6">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>