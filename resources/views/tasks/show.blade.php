<?php
/**
 * Created by PhpStorm.
 * User: a2
 * Date: 07/02/19
 * Time: 18:25
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
                    <div class="card-header">Détails de la tâche</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-md-right">Description</div>

                            <div class="col-md-7">
                                {{ $task->description }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 text-md-right">Assignée à</div>

                            <div class="col-md-7">
                                {{ $task->assigned_to }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 bloc-body">
                                <div class="row task-button">
                                    <div class="col-md-6 text-md-right">
                                        <a href="{{ route('tasks.edit', $task) }}"><button class="btn btn-primary">Modifier <i class="fas fa-edit" aria-hidden="true"></i></button></a>
                                    </div>

                                    <div class="col-md-6 text-md-left">
                                        <form method="POST" action="{{ route('tasks.destroy', $task) }}" onsubmit="return confirm('Voulez-vous vraiment supprimer cette tâche ?')">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-danger">Supprimer <i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
