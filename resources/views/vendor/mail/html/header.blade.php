@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/B33f2yf/logo.png"class="logo" alt="Laravel Logo" /></a>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
