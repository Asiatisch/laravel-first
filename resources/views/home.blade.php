<x-app-layout>
    <x-slot name="home">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div {{-- class="p-6 bg-white border-b border-gray-200" --}}>
                   <h1 class="text-4xl font-bold">Home page</h1>
                </div>
               
                <p class="mt-3 text-lg"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Suscipit quis sapiente ipsam ut expedita voluptatibus deleniti officia at, cumque labore? Deleniti quasi dolor reiciendis asperiores fuga praesentium inventore delectus maxime!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>