@extends('layout.master')

@section('title')
    Details of {{$product->title}}
@endsection

@section('content')
    <h3 class="text-center">Details of {{$product->title}}</h3>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Title: {{$product->title}}</li>
            <li class="list-group-item">Price: {{$product->price}}</li>
            <li class="list-group-item">Total count: {{$product->total_count}}</li>
            <li class="list-group-item">Description: {{$product->description}}</li>
            <li class="list-group-item">Category: {{$product->category}}</li>
        </ul>
    </div>
</div>
@endsection
