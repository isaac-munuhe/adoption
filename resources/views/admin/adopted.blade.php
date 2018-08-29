@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">List of Adopters</h1>
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <table class="table table-sm table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>ID NUMBER</th>
                    <th>AGE</th>
                    <th>Marital</th>
                    <th>Location</th>
                    <th>Address</th>
                    <th>Passport</th>
                    <th>Good Conduct</th>
                    <th>Bank</th>
                    {{-- <th>Marriage Cert</th> --}}
                    <th>Child ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($adoptees as $adoptee)
                    <tr>
                        <td>{{$adoptee->id}}</td>
                        <td>{{$adoptee->name}}</td>
                        <td>{{$adoptee->idno}}</td>
                        <td>{{$adoptee->age}}</td>
                        <td>{{$adoptee->marital}}</td>
                        <td>{{$adoptee->location}}</td>
                        <td>{{$adoptee->address}}</td>
                        <td>{{$adoptee->passport}}</td>
                        <td>{{$adoptee->good_conduct}}</td>
                        <td>{{$adoptee->bank}}</td>
                        {{-- <td>{{$adoptee->marriage_cert}}</td> --}}
                        <td>{{$adoptee->child_id}}</td>
                        <td>
                            @if($adoptee->is_approved==1)
                                <span class="badge badge-pill badge-success">APPROVED</span>
                            @else
                                <span class="badge badge-pill badge-danger">NOT APPROVED</span>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                               data-target="#status-modal-{{ $adoptee->id }}"><i class="fa fa-fw fa-edit"></i>Toggle
                                Status</a>
                        </td>
                        <!-- ====================Toggle status Modal===========================  -->
                        <div id="status-modal-{{ $adoptee->id }}" class="modal fade" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                             style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5>Are you sure you want to change the status?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ url('/admin/adoptee/toggle-status/'.$adoptee->id) }}"
                                           class="btn btn-success float-left">Okay</a>
                                        <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- ====================End Toggle status Modal===========================  -->
                    </tr>
                @empty
                    <p>No data found!</p>
                @endforelse
                </tbody>
            </table>

            <a class="btn btn-primary" href="{{ url('admin/export') }}">Print</a>

            {{-- <button type="button" class="btn btn-danger btn-lg pull-right" onclick="window.print();"> <span class="fa fa-print"></span> Print</button> --}}
        </div>
    </div>
@endsection