<x-app-layout>
    <div class="h-full w-full">
        @foreach ($blogs as $blog)
            <div>
                @if ($blog->blog_status == 'accept')
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
                                    <div class="bg-gray-100 rounded-lg mx-2 mb-3 px-2 min-h-[15rem]">
                                        <p class="p-2 text-black"> {!! $blog->blog !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            @endif

        @endforeach
    </div>
</x-app-layout>
