<?php
/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 15:49
 */
?>
@extends('layout')

@section('butons')
    @if(sizeof($letras)>0)
        @include('persons.botoes')
    @endif
@endsection

@section('content')
    @if(sizeof($pessoas)>0)
        @foreach($pessoas as $pessoa)
            <div class="col-md-6">
                @include('persons.contato')
            </div>
        @endforeach
    @endif
@endsection