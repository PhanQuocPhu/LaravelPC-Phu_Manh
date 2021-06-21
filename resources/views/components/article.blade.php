<div class="Ar-new">
    <div class="Ar-new-head">
        <h3 class="Ar-new-tittle">
            <span>Tin tức mới nhất</span>
        </h3>
    </div>
    <div class="Ar-new-content">
        @if (isset($articles))
            @foreach ($articles as $article)
                <div class="row Post">
                    <div class="col-md-4 ">
                        <a href="{{ route('get.detail.article', [$article->a_slug, $article->id]) }}">
                            <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="Post-img">
                        </a>
                    </div>
                    <div class="col-md-8 Ar-new-content-contain">
                        <h3 class="">
                            <a href="{{ route('get.detail.article', [$article->a_slug, $article->id]) }}">
                                {{ $article->a_name }}
                            </a>
                        </h3>
                        <div class="Post-meta" style="margin-bottom: 5px">
                            <div class="Post-author" style="float: left; display:block">
                                Bởi <span style="color: #dd3333"><strong>Hải Nam </strong> </span>
                            </div>
                            <div class="Post-time" style="float:left; display:block; margin-left:5px">
                                <i class="fa fa-clock-o" style="color: #2e9fff"></i>
                                <span>{{ $article->created_at }}</span>
                            </div>
                            <div style="clear: both"></div>
                        </div>

                        <div class="Post-des">
                            <p>{{ $article->a_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- @include('components.paginate', ['elements' => $articles]) --}}
            {{ $articles->links('components.paginate') }}
        @endif
    </div>
</div>
