<x-admin-layout>
    <div class="h-full w-full">
        @foreach ($blogs as $blog)
            <div>
                @if ($blog->blog_status == 'Review')
                    <li class=" grid grid-cols-1 gap-8 border rounded-lg bg-gray-200 m-20">

                        <div>
                            <div class="px-4 py-2 sm:px-6">
                                <p class="pr-8 text-base font-semibold leading-6 text-gray-900">{{ $blog->user_name }}
                                </p>
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
                            <form action="blogStatus/{{ $blog->id }}" method="post">
                                @csrf
                                <input type="text" class="hidden" name="blog_status" id="blog_status" value="Accept">
                                <button type="submit" name="accept"
                                    class="bg-indigo-600 text-white hover:bg-indigo-700  w-max rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                                    aria-controls="tabs-1-panel-1" role="tab">Accept</button>
                            </form>
                            <form action="blogStatus/{{ $blog->id }}" method="POST">
                                @csrf
                                <input type="text" class="hidden" name="blog_status" id="blog_status" value="declin">
                                <button type="submit" id="declineButton"
                                    class="bg-red-600 text-white hover:bg-red-700  w-max ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                                    aria-controls="tabs-1-panel-1" role="tab" type="button">Decline</button>
                            </form>

                        </div>

                    </li>
                @endif

            </div>
        @endforeach
    </div>
</x-admin-layout>
