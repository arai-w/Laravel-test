@extends('layouts.helloapp')
@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>必要なだけ記述</p>
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        メッセージ表示
        @endslot
    @endcomponent

@endsection

@section('content2')
    <p>本文コンテンツ2</p>
    <p>必要なだけ記述2</p>
@endsection

@section('footer')
copylight 2020
@endsection