@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>検索結果</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<table class="back">
    <tr><td>
        <form method="GET" action="{{ route('Suredo.kensakugo') }}">
            <input type="date" class="textbox" name="word" required autofocus>
            <input type="submit" class="button" value="業務日報検索">
        </form>
    </td></tr>
</table>
  
@if($suredos->count())
<table class="table" width="80%">

    @foreach ($suredos as $suredo)
    <form method="GET" action="{{ route('Suredo.syousai') }}">
    <input type="hidden" name="bangou" value="{{ $suredo->bangou }}">
    <tr class="tdtop"><td>{{ $suredo->taitoru }}</td>
        <td class="td">{{ $suredo->name }}</td>
        <td class="td">{{ $suredo->honbun }}</td>
        <td><input type="submit" class="button" value="詳細">
    </tr>
    </form>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
<a href="{{ route('home') }}"><input type="button" class="button" value="トップに戻る"></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<header class="line">
    {{$word}} 業務日報 : WELCOME {{ Auth::user()->name}}さん
</header>