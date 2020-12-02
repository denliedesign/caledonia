    <div id="blog-section" class="mb-4">
        <div class="container">
            <h2 class="my-5 font-weight-bold text-center text-uppercase">Dance Blog</h2>
            @can('update', \App\Post::class)
                <p class="text-center"><a href="/posts/create">Create New Post</a></p>
            @endcan
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach($posts as $post)
                    <div class="blog-card col">
                        <a class="blog-link-img" href="/posts/{{ $post->id }}"><img src="{{ asset('/storage/' . $post->image) }}" alt="" class="img-fluid mb-4"></a>
                        <div class="row">
                            <div class="col-3">
                                <div class="gold-date-box">
                                    <p class="my-0 py-0 text-center gold-number">{{ $post->shown->format('d') }}</p>
                                    <p class="my-0 py-0 text-center gold-month text-uppercase">{{ $post->shown->format('M') }}</p>
                                </div>
                            </div>
                            <div class="col-9">
                                <a class="blog-link text-dark" href="/posts/{{ $post->id }}"><h5 class="font-weight-bold">{{ $post->title }}</h5></a>
                                <p>{!! strip_tags(substr($post->content, 0, 125)) . '...' !!}</p>
                                <div class="short-divide"></div>
                            </div>
                        </div>

                        @can('update', \App\Post::class)
                            <div class="card-footer">
                                <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                    <div><a href="/posts/{{ $post->id }}/edit">Edit Post</a></div>
                                    <div>
                                        <form action="/posts/{{ $post->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endcan

                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
