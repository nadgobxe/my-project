<nav class="ml-10 flex items-baseline space-x-4">
    @foreach ($links as $link)
        <a href="{{ $link['url'] }}"
            class="{{ request()->is($link['url']) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
            aria-current="page">
            {{ $link['label'] }}
        </a>
        </a>
    @endforeach
</nav>