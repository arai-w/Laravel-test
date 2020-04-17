@extends('layouts.helloapp')
@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @include('components.message'
       ,['msg_title'=>'OK','msg_content'=>'サブビュー'])

@endsection

@section('content2')
    <p>本文コンテンツ2</p>
    <p>必要なだけ記述2</p>
@endsection

@section('footer')
copylight 2020
@endsection