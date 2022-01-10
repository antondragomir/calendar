add_event(document, 'DOMContentLoaded', function() {
    main.init();
});

var main = {

    init: function() {
        // vars
        // actions
        this.resize_table();
        this.table_size();
    },

    resize_table: function(){
        window.addEventListener('resize', function(event) {
            main.table_size();
        }, true);
    },

    table_size: function(){
        var table = ge('table-month');
        var cells = ge_by_class("calendar-event-ul");
        var rows = ge_by_class('calendar-row');
        var cols = ge_by_class('calendar-day-head');
        var navbar = ge('navbar');
        // var tableHeight = table.offsetHeight;
        // var navbarHeight = navbar.offsetHeight;
        // var windowHeight = window.innerHeight;
        var freeSpace = window.innerHeight - navbar.offsetHeight - cols[0].offsetHeight - ge('bb').offsetHeight - ge('calendar-tbody').offsetHeight;
        var tableWidth = table.offsetWidth;
        let colWidth = tableWidth / cols.length - 20 - (cols.length * 2) + 'px';
        // let rowHeight = tableWidth / cols.length - 20 - 24 + 'px';
        let rowHeight = freeSpace / rows.length - 24 - 20 - (rows.length * 2) + 'px';
        // set style
        // for (i = 0, len = cols.length; i < len; i++) {
        //     cols[i].style.minWidth = colWidth;
        //     cols[i].style.maxWidth = colWidth;
        // }
        for (j = 0, len = cells.length; j < len; j++) {
            cells[j].style.minWidth = colWidth;
            cells[j].style.maxWidth = colWidth;
            cells[j].style.minHeight = rowHeight;
            cells[j].style.maxHeight = rowHeight;
        }
        console.log(rowHeight);
    }
}