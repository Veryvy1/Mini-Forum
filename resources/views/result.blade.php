@if(count($ccontent)>0)
@foreach ($ccontent as $content)
<li class="list-group-item"><a href="{{ url('content/'.$content->id) }}">{{ $content->judul }}</a></li>
@endforeach
@else
<li class="list-group-item">No Results Found</li>
