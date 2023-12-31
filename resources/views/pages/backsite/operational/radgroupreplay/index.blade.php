@extends('layouts.app')

{{-- set title --}}
@section('title', 'Group')

@section('content')

<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Group</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Group</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- add card --}}
            {{-- @can('consultation_create') --}}
                <div class="content-body">
                    <section id="add-home">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <a data-action="collapse">
                                            <h4 class="card-title text-white">Add Data</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card-content collapse hide">
                                        <div class="card-body card-dashboard">

                                            <form class="form form-horizontal" action="{{ route('backsite.group.store') }}" method="POST" enctype="multipart/form-data">

                                                @csrf

                                                <div class="form-body">
                                                    <div class="form-section">
                                                        <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="groupname">Groupname <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="groupname" name="groupname" class="form-control" placeholder="Groupname" value="{{old('groupname')}}" autocomplete="off" required>

                                                            @if($errors->has('groupname'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('groupname') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="attribute">attribute <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="attribute" name="attribute" class="form-control" placeholder="attribute" value="Mikrotik-Rate-Limit" autocomplete="off" required>

                                                            @if($errors->has('attribute'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('attribute') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                   {{-- <div class="form-group row {{ $errors->has('attribute') ? 'has-error' : '' }}">
                                                        <label class="col-md-3 label-control">Attribute<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="attribute"
                                                                    id="attribute"
                                                                    class="form-control select2" required>
                                                                    <option value="{{ '' }}" disabled selected>Choose</option>
                                                                    <option value="Mikrotik-Rate-Limit">Mikrotik-Rate-Limit</option>
                                                            </select>

                                                            @if($errors->has('attribute'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('attribute') }}</p>
                                                            @endif
                                                        </div>
                                                    </div> --}}

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="op">Op <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="op" name="op" class="form-control" placeholder="Op" value="{{old('op')}}" autocomplete="off" required>

                                                            @if($errors->has('op'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('op') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="download">Download <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="download" name="download" class="form-control" placeholder="Download" value="{{old('download')}}" autocomplete="off" required>

                                                            @if($errors->has('download'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('download') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="upload">Upload <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="upload" name="upload" class="form-control" placeholder="Upload" value="{{old('upload')}}" autocomplete="off" required>

                                                            @if($errors->has('upload'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('upload') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions text-right">
                                                    <button type="submit" style="width:120px;" class="btn btn-cyan" onclick="return confirm('Are you sure want to save this data ?')">
                                                        <i class="la la-check-square-o"></i> Submit
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            {{-- @endcan --}}

            {{-- table card --}}
            {{-- @can('consultation_table') --}}
                <div class="content-body">
                    <section id="table-home">
                        <!-- Zero configuration table -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Group List</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered text-inputs-searching default-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Group Name</th>
                                                            <th>Attribute</th>
                                                            <th>Op</th>
                                                            <th>Value</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($datas as $data)
                                                            <tr data-entry-id="{{ $data->id }}">
                                                                <td>{{ isset($data->created_at) ? date("d/m/Y H:i:s",strtotime($data->created_at)) : 'Tanggal tidak ada' }}</td>
                                                                <td>{{ $data->groupname ?? '' }}</td>
                                                                <td>{{ $data->attribute ?? '' }}</td>
                                                                <td>{{ $data->op ?? '' }}</td>
                                                                <td>{{ $data->value ?? '' }}</td>
                                                                <td class="text-center">

                                                                    <div class="btn-group mr-1 mb-1">
                                                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                                        <div class="dropdown-menu">

                                                                            @can('consultation_edit')
                                                                                <a class="dropdown-item" href="{{ route('backsite.group.edit', $data->id) }}">
                                                                                    Edit
                                                                                </a>
                                                                            @endcan

                                                                            @can('consultation_delete')
                                                                                <form action="{{ route('backsite.group.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                    <input type="submit" class="dropdown-item" value="Delete">
                                                                                </form>
                                                                            @endcan

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            {{-- not found --}}
                                                        @endforelse
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                           <th>Date</th>
                                                            <th>Group Name</th>
                                                            <th>Attribute</th>
                                                            <th>Op</th>
                                                            <th>Value</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            {{-- @endcan --}}
        </div>
    </div>
<!-- END: Content-->

@endsection

@push('after-script')
    <script>
        jQuery(document).ready(function($){
            $('#mymodal').on('show.bs.modal', function(e){
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });

            $('.select-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })

            $('.deselect-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        });

        $('.default-table').DataTable( {
            "order": [],
            "searchable": true,
            "paging": true,
            "lengthMenu": [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"] ],
            "pageLength": 10
        });
    </script>

{{-- modal --}}
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button class="btn close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa spin"></i>
                </div>
            </div>
        </div>
    </div>
@endpush
