<x-app-layout>
    <div class="h-full w-full">
        @foreach ($blogs as $blog)
            <div>
                @if (Auth::user()->id == $blog->user_id)
                    <li class=" grid grid-cols-1 gap-8 rounded-lg ">

                        {{-- <div>
                            <div class="px-4 py-2 sm:px-6 flex justify-between">
                                <p class="pr-8 text-base text-left font-semibold leading-6 text-gray-100">
                                    {{ $blog->user_name }}</p>

                                @if ($blog->blog_status == 'Accept')
                                    <p class="pr-8 text-base font-light leading-6  text-green-500 mx-1">
                                        Accepted </p>
                                @endif

                                @if ($blog->blog_status == 'declin')
                                    <p class="pr-8 text-base font-light leading-6 text-red-500 ">Declined </p>
                                @endif

                                @if ($blog->blog_status == 'Review')
                                    <p class="pr-8 text-base font-light leading-6 text-gray-900">Wating for admin Review
                                    </p>
                                @endif
                            </div>
                            <div class="flex items-center" aria-orientation="horizontal" role="tablist">
                            </div>
                            <div class="mt-1 mx-1">
                                <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1"
                                    role="tabpanel" tabindex="0">
                                    <h1 class="p-2 text-gray-300 font-bold text-4xl "> {!! $blog->blog_title !!} </h1>
                                    <div>
                                        <div class="bg-gray-800 rounded-lg mx-2 mb-3 px-2 min-h-[15rem]">
                                            <h1 class="p-2 text-gray-300 font-medium"> {!! $blog->blog !!} </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="w-[40rem] mx-auto my-20">
                            <h1 
                                class=" text-4xl text-gray-300 font-bold my-4 leading-10 hover:underline hover:text-green-400">{{ $blog->blog_title }}</h1>
                            <div class="flex py-4">
                                <span class="mt-0.5">
                                    <svg style="color: rgb(22, 163, 74);" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                            fill="#16a34a"></path>
                                    </svg> </span>
                                <span class="mr-8">
                                    <p class="text-green-600 font-bold ml-1">{{ $blog->user_name }}</p>
            
                                </span>
                                <span class="mt-1">
                                    <svg style="color: rgb(22, 163, 74);" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"
                                            fill="#16a34a"></path>
                                    </svg></span>
                                <span class="mr-8">
                                    <p class="text-green-600 font-bold ml-1">{{ $blog->updated_at->format('d/m/Y') }}</p>
            
                                </span>
                                <span class="mt-1">
                                    <svg style="color: rgb(22, 163, 74);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16"> <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" fill="#16a34a"></path> <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" fill="#16a34a"></path> <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" fill="#16a34a"></path> </svg></span>
                                <span class="mr-8">
                                    @if ($blog->blog_status == 'Accept')
                                    <p class="text-green-600 font-bold ml-1">Accepted</p>
                                @endif

                                @if ($blog->blog_status == 'declin')
                                <p class="text-green-600 font-bold ml-1">Rejected</p>
                                @endif

                                @if ($blog->blog_status == 'Review')
                                <p class="text-green-600 font-bold ml-1">Waiting</p>
                                @endif
                                    
                                </span>
                                
                            </div>
                            <h1 class="text-gray-400 font-medium"> {!! $blog->blog !!} </h1>
                        </div>
                    </li>
            </div>
        @endif
        @endforeach
    </div>
</x-app-layout>
