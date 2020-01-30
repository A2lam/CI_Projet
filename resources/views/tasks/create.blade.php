<?php
/**
 * Created by PhpStorm.
 * User: a2
 * Date: 27/01/19
 * Time: 02:47
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container task-content">
        <div class="row justify-content-center">
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="col-md-10 task-body">
                <div class="card">
                    <div class="card-header">Création d'une tâche</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>

                                <div class="col-md-7">
                                    <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus></textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="assigned_to" class="col-md-3 col-form-label text-md-right">Assignée à</label>

                                <div class="col-md-7">
                                    <input id="assigned_to" type="text" class="form-control{{ $errors->has('assigned_to') ? ' is-invalid' : '' }}" name="assigned_to" value="{{ old('assigned_to') }}" required autofocus>

                                    @if ($errors->has('assigned_to'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('assigned_to') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Créer <i class="fas fa-check-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
