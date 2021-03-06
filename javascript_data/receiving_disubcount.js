function format ( d ) {
    return  'Detail of : '+d.name+
            '<table class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>SPK No</th>'+
                        '<th>Batch No</th>'+
                        '<th>LPP No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Quantity</th>'+
                        '<th>Actual</th>'+
                        '<th>Balance</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                    '<tr>'+
                        '<td>99823991</td>'+
                        '<td>Product Name</td>'+
                        '<td>2198391</td>'+
                        '<td>1233</td>'+
                        '<td>123</td>'+
                        '<td>123333</td>'+
                        '<td>123333</td>'+
                        '<td>123333</td>'+
                        '<td>123333</td>'+
                    '</tr>'+
                '</tbody>'+
            '</table>';
}

$(document).ready(function() {
    var table = $('#receiving_disubcount').DataTable( {
        "ajax": "../json/data_rd.json",
        "searching": false,
        "paging":   false,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" },
            { "data": "office2" },
            { "data": "office3" }
        ],
        "order": [[1, 'asc']]
    } );
    
    // Add event listener for opening and closing details
    $('#receiving_disubcount tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
});