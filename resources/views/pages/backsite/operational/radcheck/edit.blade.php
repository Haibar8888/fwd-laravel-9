@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - User')

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit User</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- forms --}}
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Edit</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                        </div>
                                        <form class="form form-horizontal" action="{{ route("backsite.group.update", [$group->id]) }}" method="POST" enctype="multipart/form-data">

                                                @method('PUT')
                                                @csrf

                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="fa fa-edit"></i> Form Edit</h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="username">Username <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="username" name="username" class="form-control" placeholder="username" value="{{old('username'),isset($radcheck->username) ? $radcheck->username : '')}}" autocomplete="off" required>

                                                            @if($errors->has('username'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('username') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row {{ $errors->has('attribute') ? 'has-error' : '' }}">
                                                        <label class="col-md-3 label-control">Type Password<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="attribute"
                                                                    id="attribute"
                                                                    class="form-control select2" required>
                                                                    <option value="{{ '' }}" disabled selected>Choose</option>
                                                                    <option value="SHA1-Password">SHA1-Password</option>
                                                            </select>

                                                            @if($errors->has('attribute'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('attribute') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row {{ $errors->has('groupname') ? 'has-error' : '' }}">
                                                        <label class="col-md-3 label-control">groupname<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="groupname"
                                                                    id="groupname"
                                                                    class="form-control select2" required>
                                                                    <option value="" disabled selected>Choose</option>
                                                                    @foreach($groups as $group)
                                                                        <option value="{{$group->groupname}}">{{$group->groupname}}</option>
                                                                    @endforeach
                                                                    
                                                            </select>
                                                            @if($errors->has('groupname'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('groupname') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                   

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="op">Op <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="op" name="op" class="form-control" placeholder="Op" value="{{old('op')}}" autocomplete="off" required>

                                                            @if($errors->has('op'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('op') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="form-actions text-right">
                                                    <a href="{{ route('backsite.consultation.index') }}" style="width:120px;" class="btn bg-blue-grey text-white mr-1" onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                        <i class="ft-x"></i> Cancel
                                                    </a>
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

        </div>
    </div>
<!-- END: Content-->

@endsection
