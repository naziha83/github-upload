/* ------------------------------------------------------------------------------
 *
 *  # Date and time pickers
 *    - load perfect_scrollbar.min.js
 *
 * # Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var DateTimePickers = function() {
    //
    // Setup module components
    //

    // Pickadate picker
    var _componentPickadate = function() {
        if (!$().pickadate) {
            console.warn('Warning - picker.js and/or picker.date.js is not loaded.');
            return;
        }

        // Basic options
        $('.pickadate').pickadate();

        // Change day names
        $('.pickadate-strings').pickadate({
            weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            showMonthsShort: true
        });

        // Button options
        $('.pickadate-buttons').pickadate({
            today: '',
            close: '',
            clear: 'Clear selection'
        });

        // Accessibility labels
        $('.pickadate-accessibility').pickadate({
            labelMonthNext: 'Go to the next month',
            labelMonthPrev: 'Go to the previous month',
            labelMonthSelect: 'Pick a month from the dropdown',
            labelYearSelect: 'Pick a year from the dropdown',
            selectMonths: true,
            selectYears: true,

            monthsFull: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'],
            monthsShort: [ 'Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogo', 'Sep', 'Okt', 'Nov', 'Dis' ],
            weekdaysFull: [ 'Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu' ],
            weekdaysShort: ['Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum', 'Sab'],
            firstDay: 1,
            today: 'Hari Ini',
            clear: 'Reset',
            close: 'Tutup',
            //format: 'd mmmm yyyy',
			format: 'dd-mm-yyyy',
            formatSubmit: 'yyyy-mm-dd'
        });

        // Localization
        // $('.pickadate-translated').pickadate({
        //     monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        //     weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        //     today: 'aujourd\'hui',
        //     clear: 'effacer',
        //     formatSubmit: 'yyyy/mm/dd'
        // });

        // Format options
        $('.pickadate-format').pickadate({

            // Escape any “rule” characters with an exclamation mark (!).
            format: 'You selecte!d: dddd, dd mmm, yyyy',
            formatSubmit: 'yyyy/mm/dd',
            hiddenPrefix: 'prefix__',
            hiddenSuffix: '__suffix'
        });

        // Editable input
        var $input_date = $('.pickadate-editable').pickadate({
            editable: true,
            onClose: function() {
                $('.datepicker').focus();
            }
        });
        var picker_date = $input_date.pickadate('picker');
        $input_date.on('click', function(event) {
            if (picker_date.get('open')) {
                picker_date.close();
            } else {
                picker_date.open();
            }
            event.stopPropagation();
        });

        // Dropdown selectors
        $('.pickadate-selectors').pickadate({
            selectYears: true,
            selectMonths: true
        });

        // Year selector
        $('.pickadate-year').pickadate({
            selectYears: 4
        });

        // Set first weekday
        $('.pickadate-weekday').pickadate({
            firstDay: 1
        });

        // Date limits
        $('.pickadate-limits').pickadate({
            min: [2014,3,20],
            max: [2014,7,14]
        });

        // Disable certain dates
        $('.pickadate-disable').pickadate({
            disable: [
                [2015,8,3],
                [2015,8,12],
                [2015,8,20]
            ]
        });

        // Disable date range
        $('.pickadate-disable-range').pickadate({
            disable: [
                5,
                [2013, 10, 21, 'inverted'],
                { from: [2014, 3, 15], to: [2014, 3, 25] },
                [2014, 3, 20, 'inverted'],
                { from: [2014, 3, 17], to: [2014, 3, 18], inverted: true }
            ]
        });

        // Events
        $('.pickadate-events').pickadate({
            onStart: function() {
                console.log('Hello there :)')
            },
            onRender: function() {
                console.log('Whoa.. rendered anew')
            },
            onOpen: function() {
                console.log('Opened up')
            },
            onClose: function() {
                console.log('Closed now')
            },
            onStop: function() {
                console.log('See ya.')
            },
            onSet: function(context) {
                console.log('Just set stuff:', context)
            }
        });
    };

    // Anytime picker
    var _componentAnytime = function() {
        if (!$().AnyTime_picker) {
            console.warn('Warning - anytime.min.js is not loaded.');
            return;
        }

        // Basic usage
        $('#anytime-date').AnyTime_picker({
            format: '%W, %M %D in the Year %z %E',
            firstDOW: 1
        });

        // Time picker
        $('#anytime-time').AnyTime_picker({
            format: '%H:%i'
        });

        // Display hours only
        $('#anytime-time-hours').AnyTime_picker({
            format: '%l %p'
        });

        // Date and time
        $('#anytime-both').AnyTime_picker({
            format: '%M %D %H:%i',
        });

        // Custom display format
        $('#anytime-weekday').AnyTime_picker({
            format: '%W, %D of %M, %Z'
        });

        // Numeric date
        $('#anytime-month-numeric').AnyTime_picker({
            format: '%d/%m/%Z'
        });

        // Month and day
        $('#anytime-month-day').AnyTime_picker({
            format: '%D of %M'
        });

        // On demand picker
        $('#ButtonCreationDemoButton').on('click', function (e) {
            $('#ButtonCreationDemoInput').AnyTime_noPicker().AnyTime_picker().focus();
            e.preventDefault();
        });


        //
        // Date range
        //

        // Options
        var oneDay = 24*60*60*1000;
        var rangeDemoFormat = '%e-%b-%Y';
        var rangeDemoConv = new AnyTime.Converter({format:rangeDemoFormat});

        // Set today's date
        $('#rangeDemoToday').on('click', function (e) {
            $('#rangeDemoStart').val(rangeDemoConv.format(new Date())).trigger('change');
        });

        // Clear dates
        $('#rangeDemoClear').on('click', function (e) {
            $('#rangeDemoStart').val('').trigger('change');
        });

        // Start date
        $('#rangeDemoStart').AnyTime_picker({
            format: rangeDemoFormat
        });

        // On value change
        $('#rangeDemoStart').on('change', function(e) {
            try {
                var fromDay = rangeDemoConv.parse($('#rangeDemoStart').val()).getTime();

                var dayLater = new Date(fromDay+oneDay);
                    dayLater.setHours(0,0,0,0);

                var ninetyDaysLater = new Date(fromDay+(90*oneDay));
                    ninetyDaysLater.setHours(23,59,59,999);

                // End date
                $('#rangeDemoFinish')
                .AnyTime_noPicker()
                .removeAttr('disabled')
                .val(rangeDemoConv.format(dayLater))
                .AnyTime_picker({
                    earliest: dayLater,
                    format: rangeDemoFormat,
                    latest: ninetyDaysLater
                });
            }

            catch(e) {

                // Disable End date field
                $('#rangeDemoFinish').val('').attr('disabled', 'disabled');
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentPickadate();
            _componentAnytime();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DateTimePickers.init();
});
