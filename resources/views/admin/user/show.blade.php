@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Apprenant {{ $user->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/user/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Avatar </th><td> {{ $user->avatar }} </td></tr>
                                    <tr><th> Nom </th><td> {{ $user->name }} </td></tr>
                                    <tr><th> Prenom </th><td> {{ $user->prenom }} </td></tr>
                                    <tr><th> Email </th> <td><a href="mailto:{{$user->email}}"><strong>{{$user->email}}</strong></a></td></tr>
                                    <tr><th> OD </th><td> {{ $user->od }} </td></tr>
                                    <tr><th> Probleme </th><td> {{ $user->probleme }} </td></tr>
                                    <tr><th> Lieu de naissance </th><td> {{ $user->lieu_naissance }} </td></tr>
                                    <tr><th> Date de naissance </th><td> {{ $user->date_naissance }} </td></tr>
                                    <tr><th> Sexe </th><td> {{ $user->sexe }} </td></tr>
                                    <tr><th> Idp </th><td> {{ $user->_nom }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
