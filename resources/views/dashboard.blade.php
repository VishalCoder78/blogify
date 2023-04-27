<x-app-layout>
    <div class="h-full w-full">
        @foreach ($blogs as $blog)
            <div>
                @if ($blog->blog_status == 'Accept')
                    <div class="w-[40rem] mx-auto mt-20 pb-16">
                        <a href="/blog/{{ $blog->id }}"
                            class=" text-4xl text-gray-300 font-bold my-4 leading-10">{{ $blog->blog_title }}</a>
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
                            <span class="mt-0.5">
                                <svg style="color: rgb(22, 163, 74);" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                    zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
                                    preserveAspectRatio="xMidYMid meet" version="1.0">
                                    <defs>
                                        <clipPath id="id1">
                                            <path
                                                d="M 3.460938 6.5625 L 26.539062 6.5625 L 26.539062 24.707031 L 3.460938 24.707031 Z M 3.460938 6.5625 "
                                                clip-rule="nonzero" fill="#16a34a"></path>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#id1)">
                                        <path fill="#16a34a"
                                            d="M 24.230469 11.101562 L 15 16.769531 L 5.769531 11.101562 L 5.769531 8.832031 L 15 14.503906 L 24.230469 8.832031 Z M 24.230469 6.5625 L 5.769531 6.5625 C 4.492188 6.5625 3.472656 7.578125 3.472656 8.832031 L 3.460938 22.441406 C 3.460938 23.695312 4.492188 24.707031 5.769531 24.707031 L 24.230469 24.707031 C 25.507812 24.707031 26.539062 23.695312 26.539062 22.441406 L 26.539062 8.832031 C 26.539062 7.578125 25.507812 6.5625 24.230469 6.5625 "
                                            fill-opacity="1" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span>
                            <span class="mr-8">
                                <p class="text-green-600 font-bold ml-1">{{ $blog->user_email }}</p>

                            </span>
                            <span class="mt-0.5">
                                <svg style="color: rgb(22, 163, 74);" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"
                                        fill="#16a34a"></path>
                                </svg></span>
                            <span class="mr-8">
                                <p class="text-green-600 font-bold ml-1">{{ $blog->updated_at->format('d/m/Y') }}</p>

                            </span>
                        </div>
                        <h1 class="text-gray-400 font-medium"> {!! substr($blog->blog, 0, 250) !!} </h1>
                        <a href="/blog/{{ $blog->id }}"
                            class="inline-flex items-center mt-8 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
            </div>
        @endif
        @endforeach
    </div>
</x-app-layout>
