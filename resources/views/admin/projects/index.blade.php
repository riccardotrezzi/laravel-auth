@extends('layouts.app')

@section('page-title', 'Progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Guarda tutti i miei progetti!
                    </h1>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data del progetto</th>
                            <th scope="col">Tipologia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->project_date }}</td>
                                <td>{{ $project->project_type }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-primary">
                                        Guarda il progetto!
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
