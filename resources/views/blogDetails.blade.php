<x-app-layout>
    @foreach ($blogs as $blog)
        @if (request()->route('id') == $blog->id)
            <div class="w-[40rem] mx-auto my-20">
                <a href="blog/{{ $blog->id }}"
                    class=" text-4xl text-gray-300 font-bold my-4 leading-10 hover:underline hover:text-green-400">{{ $blog->blog_title }}</a>
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
                </div>
                <h1 class="text-gray-400 font-medium"> {!! $blog->blog !!} </h1>
            </div>
        @endif
    @endforeach
    <section class="bg-gray-800 dark:bg-gray-800 lg:pb-16">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-200 dark:text-white">Discussion</h2>
            </div>
            <form class="mb-6" method="POST" action="{{ route('comment') }}">
                @csrf
                <div
                    class="flex items-center py-2 px-4 mb-4 bg-gray-900 rounded-lg rounded-t-lg  dark:bg-gray-900 dark:border-gray-700">
                    <div class="w-full">
                        <input type="text" class="hidden" value=" {{ request()->route('id') }} " name="blog_id">
                        <input type="text" class="hidden" value="{{ Auth::user()->name }}" name="user_name">
                        <input type="text" class="hidden" value="user" name="auth_type">
                        <input name="comment" class=" rounded-lg px-1 py-2 w-full text-sm text-gray-400 bg-gray-900"
                            placeholder="Write a comment..." required />
                    </div>
                    <div class="">
                        <button type="submit">
                            <svg style="color: rgb(229 231 235);" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"
                                    fill="#e5e7eb"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            @foreach ($comments as $comment)
            @if (request()->route('id') == $comment->blog_id)
                <article class="p-6 mb-6 text-base bg-gray-900 rounded-lg dark:bg-gray-900">
                        <footer class="flex justify-between items-center my-4">
                            <div class="flex items-center">
                                <p class="inline-flex items-center mr-3 text-sm text-gray-400 dark:text-white"><img
                                        class="mr-2 w-6 h-6 rounded-full"
                                        src="https://ui-avatars.com/api/?name={{ $comment->user_name }}/&background=random "
                                        alt="Michael Gough">{{ $comment->user_name }}</p>
                                <p class="text-sm text-gray-400 dark:text-gray-400">
                                    <time>{{ $comment->created_at->format('d/m/Y') }}</time></p>
                            </div>

                        </footer>
                        <p class="text-gray-400 dark:text-gray-400 font-medium ">{{ $comment->comment }}</p>
                        <div class="flex items-center mt-4 space-x-4">
                        </div>
                    </article>
                    @endif
            @endforeach


        </div>
    </section>
</x-app-layout>
