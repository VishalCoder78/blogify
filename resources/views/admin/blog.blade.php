<x-admin-layout>
    <div class="h-full w-full">
        @foreach ($blogs as $blog)
            <div>
                <li class=" grid grid-cols-1 gap-8 border rounded-lg bg-gray-200 m-20">

                    <div>
                        <div class="px-4 py-2 sm:px-6">
                            <p class="pr-8 text-base font-semibold leading-6 text-gray-900">{{ $blog->user_name }}</p>
                        </div>
                        <div class="flex items-center" aria-orientation="horizontal" role="tablist">
                        </div>
                        <div class="mt-1 mx-1">
                            <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1"
                                role="tabpanel" tabindex="0">
                                <div>
                                    <div class="bg-gray-100 rounded-lg mx-2 px-2 min-h-[15rem]">
                                        <p class="p-2 text-black"> {!! $blog->blog !!} </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mx-2 mb-4 flex justify-end">
                        <!-- Selected: "bg-gray-100 text-gray-900 hover:bg-gray-200", Not Selected: "bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900" -->
                        <form action="blogStatus" method="POST">
                            @csrf
                            <input type="text" class="hidden" name="user_name" id="user_name" value="{{ $blog->user_name }}">
                            <input type="text" class="hidden" name="user_email" id="user_email" value="{{ $blog->user_email }}">
                            <input type="text" class="hidden" name="blog" id="blog" value="{{ $blog->blog }}">
                            <input type="text" class="hidden" name="user_id" id="user_id" value="{{ $blog->user_id }}">
                            <input type="text" class="hidden" name="blog_status" id="blog_status" value="accept">
                            <button type="submit" 
                            class="bg-indigo-600 text-white hover:bg-indigo-700  w-max rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Accept</button>
                        </form>
                        <form action="blogStatus" method="POST">
                            @csrf
                            <input type="text" class="hidden" name="user_name" id="user_name" value="{{ $blog->user_name }}">
                            <input type="text" class="hidden" name="user_email" id="user_email" value="{{ $blog->user_email }}">
                            <input type="text" class="hidden" name="blog" id="blog" value="{{ $blog->blog }}">
                            <input type="text" class="hidden" name="user_id" id="user_id" value="{{ $blog->user_id }}">
                            <input type="text" class="hidden" name="blog_status" id="blog_status" value="decline">
                            <button type="submit" 
                            class="bg-red-600 text-white hover:bg-red-700  w-max ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Decline</button>
                        </form>
                        
                        {{-- <form action="{{route('decline')}}" method="POST">
                            <!-- Selected: "bg-gray-100 text-gray-900 hover:bg-gray-200", Not Selected: "bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900" -->
                            <a href="{{route('decline')}}" id="tabs-1-tab-2"
                            class="bg-red-600 text-white hover:bg-red-700  w-max ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Decline</a>
                        </form> --}}
                        {{-- <form action="{{route('decline')}}" method="POST">
                            <!-- Selected: "bg-gray-100 text-gray-900 hover:bg-gray-200", Not Selected: "bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900" -->
                            <a href="{{route('decline')}}" id="tabs-1-tab-2"
                            class="bg-red-600 text-white hover:bg-red-700  w-max ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Decline</a>
                        </form> --}}
                        
                    </div>

                </li>
            </div>
        @endforeach
    </div>
</x-admin-layout>