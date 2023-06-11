@if ($paginator->hasPages())
    <nav class="p-pagination">
        <ul>
        <!-- 前へ移動ボタン -->
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <p>前へ</p>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <p class="paginationPC">前へ</p>
                    <p class="paginationMo">前</p>
                </a>
            </li>
        @endif

        {{-- Pagination Elemnts --}}
        {{-- Array Of Links --}}
        <!-- 定数よりもページ数が多い時 -->
        @if ($paginator->lastPage() > config('const.PAGINATE.LINK_NUM'))

        <!-- 現在ページが表示するリンクの中心位置よりも左の時 -->
        @if ($paginator->currentPage() <= floor(config('const.PAGINATE.LINK_NUM') / 2))
            <?php $start_page = 1;?> 
            <?php $end_page = config('const.PAGINATE.LINK_NUM'); ?>

        <!-- 現在ページが表示するリンクの中心位置よりも右の時 -->
        @elseif ($paginator->currentPage() > $paginator->lastPage() - floor(config('const.PAGINATE.LINK_NUM') / 2))
            <?php $start_page = $paginator->lastPage() - (config('const.PAGINATE.LINK_NUM') - 1); ?>
            <?php $end_page = $paginator->lastPage(); ?>

        <!-- 現在ページが表示するリンクの中心位置の時 -->
        @else
            <?php $start_page = $paginator->currentPage() - (floor((config('const.PAGINATE.LINK_NUM') % 2 == 0 ? config('const.PAGINATE.LINK_NUM') - 1 : config('const.PAGINATE.LINK_NUM'))  / 2)); ?>
            <?php $end_page = $paginator->currentPage() + floor(config('const.PAGINATE.LINK_NUM') / 2); ?>
        @endif

        <!-- 定数よりもページ数が少ない時 -->
        @else
            <?php $start_page = 1; ?>
            <?php $end_page = $paginator->lastPage(); ?>
        @endif

        @for ($i = $start_page; $i <= $end_page; $i++)
            @if ($i == $paginator->currentPage())
                <li class="active">{{ $i }}</li>
            @else
                <li class="active"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor

<!-- ページ番号　-->
        <!-- @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    {{ $element }}
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            {{ $page }}
                        </li>
                    @else
                        <li class="active">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach -->




        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}">
                <p class="paginationPC2">次へ</p>
                    <p class="paginationMo2">次</p>
                </a>
            </li>
                
        @else
            <li class="disabled">
                <p>次へ</p>
            </li>
        @endif
        </ul>
            <p class="paginate3">・</p>
    </nav>
@endif 