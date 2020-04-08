<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head,$style,$body,$end;
$head = '<html><head>';
$style = <<<EOF
<style>
        body {font-size:16pt;color:#999;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag,$txt){
    return "<{$tag}>" .$txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index()
    {
        global $head,$style,$body,$end;
        $html = $head.tag('title','Hello3/Index').$style
            .$body.tag('h1','Index').tag('p','this is Index Page')
            .'<a href = "hello3/other"> go to Other page </a>'
            .$end;
        return $html;
    }

    public function other()
    {
        global $head,$style,$body,$end;
        $html = $head.tag('title','Hello3/Other').$style
            .$body.tag('h1','Other').tag('p','this is other page')
            .$end;
        return $html;
    }

}



// class HelloController extends Controller
// {
//     public function index($id ='noname',$pass='unknown')
//     {
//         return <<< EOF
//         <html>
//         <head>
//         <title>Hello/Index</title>
//         <style>
//         body {font-size:16pt;color:#999;}
//         </style>
//         </head>

//         <body>
//             <h1> Hello </h1>
//             <p>Helloコントローラ indexアクション</p>
//             <ul>
//                 <li>ID:{$id}</li>
//                 <li>PASS:{$pass}</li>
//             </ul>

//         </body>
        
        
//         </html>
//         EOF;
//     }

// }
