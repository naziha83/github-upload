/* ------------------------------------------------------------------------------
*
*  # Form layouts
*    - load select2.min.js
*    - load uniform.min.js
*
* # Place here all your custom js. Make sure it's loaded after app.js
*
* ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var FormLayouts = function() {
    //
    // Setup module components
    //

    // Select2
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        };

        // Basic example
        $('.form-control-select2').select2({
            language: {
                noResults: function () {
                    return "Rekod tidak wujud";
                }
            }
        });

        //
        // Select with icons
        //

        // Format icon
        function iconFormat(icon) {
            var originalOption = icon.element;
            if (!icon.id) { return icon.text; }
            var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;

            return $icon;
        }

        // Initialize with options
        $('.form-control-select2-icons').select2({
            templateResult: iconFormat,
            minimumResultsForSearch: Infinity,
            templateSelection: iconFormat,
            escapeMarkup: function(m) { return m; }
        });

        // Minimum input length
        $('.select-minimum').select2({
            minimumInputLength: 2,
            minimumResultsForSearch: Infinity,
            language: {
                inputTooShort: function () {
                    return "Masukkan 2 atau lebih digit";
                },
                noResults: function () {
                    return "Rekod tidak wujud";
                }
            }
        });
    };

    // Uniform
    var _componentUniform = function() {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-slate',
            fileDefaultHtml: "Tiada Dokumen",
            fileButtonHtml: "Pilih Dokumen",
        });


        // Default initialization
        $('.form-check-input-styled').uniform();

        //
        // Contextual colors
        //
        // Primary
        $('.form-check-input-styled-primary').uniform({
            wrapperClass: 'border-primary-600 text-primary-800'
        });

        // Danger
        $('.form-check-input-styled-danger').uniform({
            wrapperClass: 'border-danger-600 text-danger-800'
        });

        // Success
        $('.form-check-input-styled-success').uniform({
            wrapperClass: 'border-success-600 text-success-800'
        });

        // Warning
        $('.form-check-input-styled-warning').uniform({
            wrapperClass: 'border-warning-600 text-warning-800'
        });

        // Info
        $('.form-check-input-styled-info').uniform({
            wrapperClass: 'border-info-600 text-info-800'
        });

        // Custom color
        $('.form-check-input-styled-custom').uniform({
            wrapperClass: 'border-indigo-600 text-indigo-800'
        });
    };

    // Input formatter
    var _componentInputFormatter = function() {
        if (!$().formatter) {
            console.warn('Warning - formatter.min.js is not loaded.');
            return;
        }

        // Phone #
        $('.format-phone-office1').formatter({
            pattern: '{{99}}-{{9999}} {{9999}}'
        });

        $('.format-phone-office2').formatter({
            pattern: '{{999}}-{{999}} {{999}}'
        });

        $('.format-phone-mobile1').formatter({
            pattern: '999-999 9999'
        });

        $('.format-phone-mobile2').formatter({
            pattern: '999-9999 9999'
        });

        // Custom - telefon pejabat
        $('.telefon_pejabat10').formatter({
            pattern: '{{99}} {{9999}} {{9999}}'
        });

        // Custom - telefon bimbit
        $('.telefon_bimbit11').formatter({
            pattern: '{{999}} {{9999}} {{9999}}'
        });
    };

    // SweetAlert
    var _componentSweetAlert = function() {
        if (typeof swal == 'undefined') {
            console.warn('Warning - sweet_alert.min.js is not loaded.');
            return;
        }

        // Defaults
        var setCustomDefaults = function() {
            swal.setDefaults({
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-light'
            });
        }
        setCustomDefaults();
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentSelect2();
            _componentUniform();
            _componentInputFormatter();
            _componentSweetAlert();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    FormLayouts.init();
});
