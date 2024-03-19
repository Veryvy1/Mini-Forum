<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center; /* Memastikan elemen-elemen di tengah */
        margin-top: 20px;
        text-align: center;
    }
x
    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-link {
        padding: 8px 12px;
        text-color: #2ea8dc;
        border: 1px solid #dee2e6;
        color: ##2ea8dc;
        background-color: #fff;
        border-radius: 4px;
        transition: all 0.3s ease;
        vertical-align: middle; /* Memastikan teks tetap di tengah */
    }

    .pagination .page-link:hover {
        background-color: #f8f9fa;
    }

    .pagination .page-item.active .page-link {
        background-color: #2ea8dc;
        color: #fff;
        border-color: ##2ea8dc;
    }

    .pagination .page-item.disabled .page-link {
        opacity: 0.6;
        pointer-events: none;
    }
    </style>
@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link" aria-hidden="true">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev" aria-label="Previous">&laquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="Next">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link" aria-hidden="true">&raquo;</span>
            </li>
        @endif
    </ul>
@endif
