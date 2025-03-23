<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('الصفحات') }}
        <a href="/pages/create" ><button type="button" class="text-white bg-blue-700 block mt-4 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none "> + اضافة صفحة </button></a>
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
                              الصورة
                          </th>
                          <th scope="col" class="px-6 py-3">
                              اسم الصفحة
                          </th>
                          <th scope="col" class="px-6 py-3">رابط الصفحة</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($pages as $page)
                      <tr class="bg-white border-b  border-gray-200">
                          <td class="px-6 py-4">
                              <div class="w-24 flex items-center justify-center">
                                <img src="{{$page->page_image}}" alt="page image">
                              </div>
                          </td>
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                              {{$page->page_name}}
                          </th>
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <a href="profile/{{$page->id}}" class="text-blue-700 underline">رابط الصفحة</a>
                        </th>
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