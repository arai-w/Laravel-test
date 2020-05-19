@extends('layouts.helloapp')

@section('title','Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="hello/addSyohin" method="post">
    <table>
        @csrf
        <tr><th>会社ｺｰﾄﾞ</th><td><input type="text" name="会社ｺｰﾄﾞ" id="syh_kai_cd"></td></tr>
        <tr><th>商品ｺｰﾄﾞ</th><td><input type="text" name="商品ｺｰﾄﾞ" id="syh_cd"></td></tr>
        <tr><th>商品属性1</th><td><input type="text" name="商品属性1" id="syh_zokusei1"></td></tr>
        <tr><th>商品属性2</th><td><input type="text" name="商品属性2" id="syh_zokusei2"></td></tr>
        <tr><th>商品名</th><td><input type="text" name="商品名" id="syh_mei"></td></tr>
        <tr><th>商品略名</th><td><input type="text" name="商品略名" id="syh_rmei"></td></tr>
        <tr><th>規格</th><td><input type="text" name="規格" id="syh_kikaku"></td></tr>
        <tr><th>カナ</th><td><input type="text" name="カナ" id="syh_kana"></td></tr>
        <tr><th>要素ｺｰﾄﾞ</th><td><input type="text" name="要素ｺｰﾄﾞ" id="syh_you_cd"></td></tr>
        <tr><th>在庫評価単価</th><td><input type="text" name="在庫評価単価" id="syh_zaitan"></td></tr>
        <tr><th>商品区分</th><td><input type="text" name="商品区分" id="syh_kbn"></td></tr>
        <tr><th>課税区分</th><td><input type="text" name="課税区分" id="syh_zei_kbn"></td></tr>
        <tr><th>在庫管理区分</th><td><input type="text" name="在庫管理区分" id="syh_zai_kbn"></td></tr>
        <tr><th>返品管理区分</th><td><input type="text" name="返品管理区分" id="syh_hen_kbn"></td></tr>
        <tr><th>ﾛｯﾄ管理区分</th><td><input type="text" name="ﾛｯﾄ管理区分" id="syh_lot_kbn"></td></tr>
        <tr><th>分類1</th><td><input type="text" name="分類1" id="syh_bun1"></td></tr>
        <tr><th>分類2</th><td><input type="text" name="分類2" id="syh_bun2"></td></tr>
        <tr><th>分類3</th><td><input type="text" name="分類3" id="syh_bun3"></td></tr>
        <tr><th>分類4</th><td><input type="text" name="分類4" id="syh_bun4"></td></tr>
        <tr><th>分類5</th><td><input type="text" name="分類5" id="syh_bun5"></td></tr>
        <tr><th>備考1</th><td><input type="text" name="備考1" id="syh_biko1"></td></tr>
        <tr><th>備考2</th><td><input type="text" name="備考2" id="syh_biko2"></td></tr>
        <tr><th>予備1</th><td><input type="text" name="予備1" id="syh_yobi1"></td></tr>
        <tr><th>予備2</th><td><input type="text" name="予備2" id="syh_yobi2"></td></tr>
        <tr><th>予備3</th><td><input type="text" name="予備3" id="syh_yobi3"></td></tr>
        <tr><th>予備4</th><td><input type="text" name="予備4" id="syh_yobi4"></td></tr>
        <tr><th>予備5</th><td><input type="text" name="予備5" id="syh_yobi5"></td></tr>

    </table>
    </form>
@endsection