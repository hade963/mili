<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('اللوحة الرئيسية') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            
            
            <tr>
                <th scope="col" class="px-6 py-3">
                    رقم الهاتف
                </th>
                <th scope="col" class="px-6 py-3">
                    الip
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
            <tr class="bg-white border-b  border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{$person->phone_number}}
                </th>
                <td class="px-6 py-4">
                    {{$person->ip_address}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
