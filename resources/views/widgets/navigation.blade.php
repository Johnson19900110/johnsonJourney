<?php
dd($categories);
?>
@if(isset($categories))
    @foreach($categories as $category)
        <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
    @endforeach
@endif
