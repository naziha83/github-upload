/* ------------------------------------------------------------------------------
*
*  # Basic datatables
*
*  Demo JS code for datatable_basic.html page
*
* ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var DatatableBasic = function() {
    //
    // Setup module components
    //

    // Basic Datatable examples
    var _componentDatatableBasic = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: 100,
                // targets: [ 3 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Saringan:</span> _INPUT_',
                sInfo:"Papar _START_ hingga _END_ daripada _TOTAL_ rekod",
                sInfoEmpty:"Papar 0 hingga 0 daripada 0 rekod",
                sInfoFiltered:"(ditapis dari _MAX_ rekod)",
                sZeroRecords:"Tiada padanan rekod dijumpai",
                sEmptyTable:"- Tiada Rekod -",
                // searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Papar:</span> _MENU_',
                paginate: { 'first': 'Pertama', 'last': 'Terakhir', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

        // Basic datatable
        $('.datatable-basic').DataTable();

        // Alternative pagination
        $('.datatable-pagination').DataTable({
            pagingType: "full_numbers",
            language: {
                paginate: {'next': $('html').attr('dir') == 'rtl' ? ' &larr;' : ' &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'}
            }
        });
    };

    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatableBasic();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DatatableBasic.init();
});
