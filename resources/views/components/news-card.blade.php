@props(['newsItem'])

<div class="bg-white p-4 rounded shadow">
    <img src="{{ asset('news_images/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="w-full h-48 object-cover rounded-t">
    <h2 class="text-2xl font-bold mt-2">{{ $newsItem->title }}</h2>
    <p class="mt-2">{{ Str::limit($newsItem->description, 100) }}</p>
    <a href="{{ route('news.show', $newsItem->id) }}" class="text-blue-500 mt-4 block">Read more</a>
</div>
