var cupang = function () {
    var getDataCupang = function(){
        var t = $('#cupang').DataTable({
            "order": [],
            "columnDefs": [
                { "orderable": false, "targets": [0,2] }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    };
    return {
        init: function () {
            getDataCupang();
        }
    };
}();
$(document).ready(function(){
    cupang.init();
});