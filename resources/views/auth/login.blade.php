@extends('layouts.login.app')

@section('content')
    <!-- Page content -->
    <div class="page-content login-cover">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <!-- Login card -->
                <form class="login-form form-validate wmin-sm-400" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="{{ asset('img/logomof.png') }}">
                                <h1 class="mb-0">Sistem eKereta</h1>
                                <span class="d-block text-muted">Sistem Pengurusan Kenderaan</span>

                                @error('email')
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Emel" value="{{ old('email') }}" autocomplete="email" autofocus required>
                                <div class="form-control-feedback">
                                    <i class="icon-envelop5 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Katalaluan" autocomplete="current-password" required>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input class="form-input-styled" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Ingat Saya
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}" class="ml-auto">Lupa Katalaluan?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Log Masuk <i class="icon-circle-right2 ml-2"></i></button>
                            </div>
                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Pautan Pantas</span>
                            </div>
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2" data-popup="tooltip" title="Informasi"><i class="icon-info3"></i></button>
                                <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2" data-popup="tooltip" title="Panduan Pengguna"><i class="icon-book2"></i></button>
                                <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2" data-popup="tooltip" title="Hubungi Kami"><i class="icon-phone2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /login card -->
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
                        password: {
                            minlength: 8
                        }
                    },
                    messages: {
                        email: {
                            required: "Sila masukkan emel",
                            email: "Sila masukkan emel yang sah"
                        },
                        password: {
                            required: "Sila masukkan katalaluan",
                            minlength: jQuery.validator.format("Sekurang-kurangnya {0} aksara diperlukan")
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
