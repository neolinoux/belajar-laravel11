<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>
    <h1>Posts Page</h1>
    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div>
      <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
      in
      <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
      | <time>{{ $post->created_at->diffForHumans() }}</time>
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back</a>
  </article> --}}

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-blue-500 hover:underline text-sm">&laquo; Back to all
                        posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->username }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">
                                    {{ $post->author->name }}
                                  </a>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                  <time class="mb-1"></time>{{ $post->created_at->diffForHumans() }}</time>
                                  
                                </p>
                                <a href="/categories/{{ $post->category->slug }}">
                                <span
                                    class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                    </svg>
                                    {{ $post->category->name }}
                                </span>
                            </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        Best practices for successful prototypes</h1>
                </header>
                <p>
                  {{ $post->body }}
                </p>
            </article>
        </div>
    </main>

</x-layout>
