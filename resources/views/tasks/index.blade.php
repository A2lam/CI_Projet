<?php
/**
 * Created by PhpStorm.
 * User: a2
 * Date: 10/02/19
 * Time: 17:05
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container task-content">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="col-md-12 task-title">
                <h2>Liste des tâches <i class="fas fa-tasks"></i></h2>
            </div>

            <div class="col-md-12 task-link">
                <a href="{{ route('tasks.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Créer une nouvelle tâche</a>
            </div>

            <div class="col-md-12 task-body">
                <div class="row">
                    @if(!$tasks)
                        <p>Aucune tâche n'a été enregistrée :)</p>
                    @else
                        <table class="table" width="100%">
                            <thead class="thead-light">
                            <tr>
                                <th>Description</th>
                                <th>Assignée à</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->assigned_to }}</td>
                                        <td align="center"><a href="{{ route('tasks.show', $task) }}"><span style="color: lightgreen;"><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
