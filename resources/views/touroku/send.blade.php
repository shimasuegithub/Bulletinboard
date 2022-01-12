@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Laravel send</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Modaal -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<style>
    @media screen and (max-width: 480px){
        body{
            background-image:url(../image/mailphone.png);
        }
        table{
            text-align: center;
            color:#c3d825;
            height: 40px;
            margin-top:70% ;
            margin-left: auto;
            margin-right: auto;
        }
        .textbox{
            width:250px;
        }
        .button{
            width:262px;    
        }
    }
    @media screen and (min-width: 481px){
        body{
            background-image:url(../image/mailcomputer.png);
        }
        table{
            text-align: center;
            color:#c3d825;
            height: 40px;
            margin-top:330px ;
            margin-left: auto;
            margin-right: auto;
        }
        .textbox{
            width:400px;
            height:50px;
        }
        .button{
            width:412px;
            height:50px;  
        }
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>
                <form method="GET" action="{{ route('sendgo') }}">
                @csrf
                <input type="text" name="mail" class="textbox">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="button" value="仮登録メール送信">
                </form>
            </td>
        </tr>
    </table>
</body>