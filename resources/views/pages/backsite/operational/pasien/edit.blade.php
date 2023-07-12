@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Consultation')

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Pasien</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Pasien</li>
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
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
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
                                        <form class="form form-horizontal" action="{{ route("backsite.pasien.update", [$pasien->id]) }}" method="POST" enctype="multipart/form-data">

                                                @method('PUT')
                                                @csrf

                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="fa fa-edit"></i> Form Pasien</h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="title">Name <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="title" name="title" class="form-control" placeholder="" value="{{ old('title', isset($pasien) ? $pasien->nama : '') }}" autocomplete="off" required>
                                                            @if($errors->has('title'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('title') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="umur">Umur<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="umur" name="umur" class="form-control" placeholder="" value="{{ old('umur', isset($pasien) ? $pasien->usia : '') }}" autocomplete="off" required>
                                                            @if($errors->has('umur'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('umur') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="jenis_kelamin">Jenis kelamin<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="" value="{{ old('jenis_kelamin', $pasien->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan' ) }}" autocomplete="off" required>
                                                            @if($errors->has('jenis_kelamin'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('jenis_kelamin') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="asal_rs">Asal Rumah Sakit<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="asal_rs" name="asal_rs" class="form-control" placeholder="" value="{{ old('umur', isset($pasien) ? $pasien->asal_rs : '') }}" autocomplete="off" required>
                                                            @if($errors->has('asal_rs'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('asal_rs') }}</p>
                                                            @endif
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
