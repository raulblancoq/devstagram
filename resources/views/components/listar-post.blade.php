<div>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <div class="">
                    <a href="{{ route('posts.show',['post'=>$post,'user'=>$post->user])}}">
                        <img src="{{ asset('/uploads').'/'.$post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div >
            {{ $posts->links() }}
        </div>
    @else 
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts, sigue a alguien!</p>
    @endif
</div>