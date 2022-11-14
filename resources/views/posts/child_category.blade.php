<ul class="children">
    @foreach( $danhmuc as $dm)
    @if($dm['loaibv_id'] == 1)
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
        <a href="/bai-viet/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @elseif($dm['loaibv_id'] == 2)
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
        <a href="/san-pham/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @else($dm['loaibv_id'] == 3)
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
        <a href="/danh-muc/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @endif

    @endforeach
</ul>