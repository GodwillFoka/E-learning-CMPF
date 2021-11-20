@extends('layouts.app')

@section('content')
<section class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between">
                        <h3 class="card-title">Video</h3>
                        <a href="{{ url('/admin/video/create') }}" class="btn btn-success btn-sm" title="Add New video">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Categorie</th>
                                        <th>Video</th>
                                        <th>Minute</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($videos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->_nom }}</td>
                                        <!-- <td> <video controls width="100" height="100" class=" card-img-top"
                                                alt="{{ $item->nom }}">
                                                <source src="{{ url('storage/' . $item->video) }}" />
                                            </video>
                                        </td> -->
                                        <td>
                                        <td>{{ $item->minute }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a href="{{ url('/admin/video/' . $item->id) }}"
                                                        title="Detail video"><button class="btn btn-info btn-sm"><i
                                                                class="fa fa-eye" aria-hidden="true"></i>
                                                            Détail</button></a>
                                                    <a href="{{ url('/admin/video/' . $item->id . '/edit') }}"
                                                        title="Modifier video"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Modifier</button></a>
                                                    <form method="POST" action="{{ url('admin/video/$video->id') }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm deleted_element"
                                                            title="Delete video"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection