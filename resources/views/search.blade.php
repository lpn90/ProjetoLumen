<?php
/**
 * User: Leonardo
 * Date: 09/11/2016
 * Time: 10:26
 */
?>
@extends('layout')

@section('content')
    @foreach($pessoas as $pessoa)
        <div class="col-md-6">
            @include('persons.contato')
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="/" class="btn btn-default">Voltar</a>
        </div>
    </div>
@endsection
