@extends("layouts.main")

@section("title", "HDC Events - Produtos")

@section("content")
<h1>Products</h1>

@if($search)
    <p>Pesquisa: {{ $search }}</p>
@endif

@endsection