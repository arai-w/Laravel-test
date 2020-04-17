<html>
<head>
<title>Hello/Index</title>
<style>
body{font-size:16pt;color:#999;}
h1{font-size:50pt;text-align:right;color:#8686f6;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
</style>
</head>
<body>
    <h1>Brade/Index</h1>
    <p>&#064;forディレクティブ</p>
    
    @foreach ($data as $item)
    
    @if($loop->first)
    <p>データ一覧</p><ul>
    @endif
    <li>NO,{{$loop->iteration}}.{{$item}}</li>
    @if($loop->last)
    </ul>
    <p>--</p>
    @endif
    @endforeach
    

</body>
</html>