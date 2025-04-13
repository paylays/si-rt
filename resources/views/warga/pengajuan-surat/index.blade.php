@extends('warga.layouts.vertical', ['title' => 'Starter Page'])

@section('css')

@endsection

@section('content')

@include("warga.layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Starter Page"])

<div class="flex flex-col gap-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Input</h4>
        </div>
        <div class="p-6">
            <h1>Test Form</h1>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection