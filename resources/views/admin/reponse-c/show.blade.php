@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ReponseC {{ $reponsec->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/reponseC') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/reponseC/' . $reponsec->id . '/edit') }}" title="Edit ReponseC"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/reponsec' . '/' . $reponsec->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ReponseC" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reponsec->id }}</td>
                                    </tr>
                                    <tr><th> Reponse </th><td> {{ $reponsec->reponse }} </td></tr><tr><th> Commentaire Id </th><td> {{ $reponsec->commentaire_id }} </td></tr><tr><th> Ceated Id </th><td> {{ $reponsec-> created_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
