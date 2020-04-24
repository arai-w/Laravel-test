@extends('layouts.helloapp')
@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>必要なだけ記述</p>
   
    <table>
    @foreach($items as $item)
        <tr>
        <!-- <td>{{$item->syh_kai_cd}}</td>     -->
        <td>{{$item->syh_cd}}</td>    
        <td>{{$item->syh_mei}}</td>   
        </tr>
    @endforeach
    </table>
@endsection

@section('content2')
    <p>本文コンテンツ2</p>
    <p>必要なだけ記述2</p>
@endsection

@section('footer')
copylight 2020
@endsection