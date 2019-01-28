@extends('home.base')
@section('content')
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>{{ $infos->title }}</legend>
    </fieldset>
    <div class="layui-row">
        <div class="layui-col-xs12">
            <div class="grid-demo grid-demo-bg1">{!! $infos->content !!}</div>
        </div>
    </div>
@endsection