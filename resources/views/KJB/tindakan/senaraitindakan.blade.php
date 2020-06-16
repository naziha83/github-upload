@extends('layouts.master.master')

@section('style')
    <style>
        table tbody tr:hover td{
            background-color: rgb(77, 182, 172, 0.2);
            /* font-weight: bold; */
            /* color: white !important; */
        }
    </style>
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header mb-2">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">KERETA JABATAN BARU </span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <!-- Breadcrumb -->
            <div class="header-elements py-0">
                <div class="breadcrumb">
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Utama</a>
                    <span class="breadcrumb-item active">Untuk Tindakan - KJB</span>
                </div>
            </div>
            <!-- /breadcrumb -->
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title"><b>SENARAI TINDAKAN</b></h5>
                    </div>

                    @hasrole('Pendaftar Agensi')
                        @include('KJB.tindakan.agensipendaftar')
                    @endhasrole

                    @hasrole('Pelulus Agensi')
                        @include('KJB.tindakan.agensipelulus')
                    @endhasrole

                    @hasrole('Penyemak MOF')
                        @include('KJB.tindakan.mofpenyemak')
                    @endhasrole

                    @hasrole('Peraku MOF')
                        @include('KJB.tindakan.mofperaku')
                    @endhasrole

                    @hasrole('Pelulus MOF')
                        @include('KJB.tindakan.mofpelulus')
                    @endhasrole
					
					@hasrole('Pendaftar Konsesi')
                        @include('KJB.tindakan.konsesi')
                    @endhasrole
					
					@hasrole('Pelulus JKDM')
                        @include('KJB.tindakan.kastam')
                    @endhasrole

                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->
@endsection

@section('script')
    <script src="{{ asset('js/global_assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection

@section('script-custom')
    <script src="{{ asset('js/main_assets/moment.min.js') }}"></script>
    <script src="{{ asset('js/main_assets/datetime-moment.js') }}"></script>
    <script src="{{ asset('js/main_assets/form_layouts.js') }}"></script>


    <script src="{{ asset('js/main_assets/datatables_basic.js') }}"></script>
    <script>
        $(document).ready(function() {
            if ('{!! session("flag") !!}' == 'hantar') {
                {!! session('status') !!}
            }
            moment().format('D MMMM YYYY');
            $.fn.dataTable.moment( 'D MMMM YYYY' );


        });
    </script>
@endsection
