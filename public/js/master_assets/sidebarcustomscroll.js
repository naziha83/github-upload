/* ------------------------------------------------------------------------------
 *
 *  # Fixed Sidebar Custom Scroll
 *    - load perfect_scrollbar.min.js
 *
 * # Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var FixedSidebarCustomScroll = function() {
    //
    // Setup module components
    //

    // Perfect scrollbar
    var _componentPerfectScrollbar = function() {
        if (typeof PerfectScrollbar == 'undefined') {
            console.warn('Warning - perfect_scrollbar.min.js is not loaded.');
            return;
        }

        // Initialize
        var ps = new PerfectScrollbar('.sidebar-fixed .sidebar-content', {
            wheelSpeed: 1,
            wheelPropagation: true
        });
    };

    //
    // Return objects assigned to module
    //
    return {
        init: function() {
            _componentPerfectScrollbar();
        }
    }
}();

// Initialize module
// ------------------------------
document.addEventListener('DOMContentLoaded', function() {
    FixedSidebarCustomScroll.init();
});
