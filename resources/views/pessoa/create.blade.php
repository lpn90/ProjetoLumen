<?php
/**
 * User: Leonardo
 * Date: 09/11/2016
 * Time: 21:36
 */
?>
@extends('layout')

@section('content')
    <div class="col-md-6">
        <form action="{{ route('agenda.pessoa.store') }}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Nome Completo">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apelido" id="apelido" value="{{ old('apelido') }}" placeholder="Apelido" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="F" {{ old('sexo')=='F' ? 'checked' : null }}><i class="fa fa-female"></i><br>
                            <input type="radio" name="sexo" value="M" {{ old('sexo')=='M' ? 'checked' : null }} ><i class="fa fa-male"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
