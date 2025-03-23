<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">اضافة صفحة </h2>
  </x-slot>
  
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <form class="max-w-sm mx-auto" action="" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-5">
                <label for="page-name" class="block mb-2 text-sm font-medium text-gray-900 ">اسم الصفحة</label>
                <input type="text" id="page-name" name="page_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="الاقزام الثلاثة" required />
              </div>
              <div class="mb-5">
                <label for="page-image" class="block mb-2 text-sm font-medium text-gray-900 ">صورة بروفايل الصفحة</label>
                <input type="file" id="page-image" name="page_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
              </div>
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">انشاء</button>
            </form>
            @if($errors->any)
            <ul>
              @foreach($errors->all() as $error)
                <li class="text-red-700">{{ $error }}</li>
              @endforeach
            </ul>
            @endif
          </div>
          </div>
          </div>
        </div>
</x-app-layout>