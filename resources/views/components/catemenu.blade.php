<div class="category-menu-list" style="display: block;">
    <ul>
        
        @if (isset($categories))
            @foreach ($categories as $category)
                <li><a href="{{ route('get.list.product', [$category->c_slug,$category->id]) }}">{{$category->c_name}}<i class="fa fa-angle-right"></i></a></li>
            @endforeach
        @endif
       
    </ul>
</div>
