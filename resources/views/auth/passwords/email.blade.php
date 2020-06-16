@extends('layouts.login.app')

@section('content')
    <!-- Page content -->
    <div class="page-content login-cover">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <!-- Password recovery form -->
                <form class="login-form wmin-sm-400 form-validate" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="card mb-0">
                        <div class="card-body">

                            @if (session('status'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                </div>
                            @endif

                            <div class="text-center mb-3">
                                <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h4 class="mb-0">Penetapan Semula Katalaluan</h4>
                                <span class="d-block text-muted">Masukkan emel yang didaftarkan</span>

                                @error('email')
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-envelop5 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Hantar Pautan</button>
                            </div>
                            <div class="text-left">
                                <button type="button" class="btn btn-link text-grey" onclick="location.href='{{ route('mainpage') }}';"><i class="icon-arrow-left52 mr-2"></i> Kembali</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /password recovery form -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
@endsection

@section('script')
    <script>
        // Setup module
        // ------------------------------
        var LoginValidation = function() {
            // Uniform
            var _componentUniform = function() {
                if (!$().uniform) {
                    console.warn('Warning - uniform.min.js is not loaded.');
                    return;
                }

                // Initialize
                $('.form-input-styled').uniform();
            };

            // Validation config
            var _componentValidation = function() {
                if (!$().validate) {
                    console.warn('Warning - validate.min.js is not loaded.');
                    return;
                }

                // Initialize
                var validator = $('.form-validate').validate({
                    ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
                    errorClass: 'validation-invalid-label',
                    successClass: 'validation-valid-label',
                    validClass: 'validation-valid-label',
                    highlight: function(element, errorClass) {
                        $(element).removeClass(errorClass);
                    },
                    unhighlight: function(element, errorClass) {
                        $(element).removeClass(errorClass);
                    },

                    // Different components require proper error label placement
                    errorPlacement: function(error, element) {
                        // Input group, styled file input
                        if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                            error.appendTo( element.parent().parent() );
                        }
                        // Other elements
                        else {
                            error.insertAfter(element);
                        }
                    },
                    rules: {
                        email: {
                            email: true
                        }
                    },
                    messages: {
                        //rujuk nama element
                        email: {
                            required: "Sila masukkan emel",
                            email: "Sila masukkan emel yang sah"
                        }
                    }
                });
            };

            //
            // Return objects assigned to module
            //

            return {
                init: function() {
                    _componentUniform();
                    _componentValidation();
                }
            }
        }();

        // Initialize module
        // ------------------------------
        document.addEventListener('DOMContentLoaded', function() {
            LoginValidation.init();
        });
    </script>
@endsection
