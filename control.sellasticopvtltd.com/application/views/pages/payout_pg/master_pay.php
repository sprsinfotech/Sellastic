<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />

<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">PAYMENT REQUEST HISTORY</h5>
                <div class="card-body">
                    <table id="pymnt_req_tbl" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="3%"></th>
                                <th width="5%">Select</th>
                                <th width="5%">Update</th>
                                <th width="5%">Delete</th>
                                <th width="2%">No.</th>
                                <th width="10%">Userid</th>
                                <th width="10%">Amount</th>
                                <th width="10%">Main Amount</th>
                                <th width="15%">Transaction</th>
                                <th width="15%">Remarks</th>
                                <th width="5%">Status</th>
                                <th width="5%">Date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
</div>

</div>
</div>


<script>
var table;
$(function() {
    table = $('#pymnt_req_tbl').DataTable({
        scrollY: "300px",
        scrollX: true,
        paging: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "<?php echo base_url('datatable/fetch_products_list_data/'); ?>",
            type: "POST",
            data: {
                tbl: 'master_pay_tbl'
            },
        },
        columns: [{
                data: "action_sel"
            },
            {
                data: "action_edit"
            },
            {
                data: "action_view"
            },
            {
                data: "action_delete"
            },
            {
                data: "id"
            },
            {
                data: "userid"
            },
            // {
            //   data: null,
            //  render: function(data, type, row) {
            //     // return data.f_name + ' ' + data.m_name + ' ' + data.l_name;
            //  }
            // },
            {
                data: "amount"
            },
            {
                data: "m_amount"
            },
            {
                data: "tr_type"
            },
            {
                data: "remarks"
            },
            {
                data: "status"
            },
            {
                data: "date"
            }
        ],
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'multi',
            // selector: 'td:first-child'
        },
        order: [
            [1, 'asc']
        ],
        dom: 'lBfrtip',
        buttons: [{
                extend: 'excel',
                messageTop: 'Payment Data Sellastic Corp.'
            },
            {
                extend: 'print',
                text: 'Print all',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            },
            {
                extend: 'print',
                text: 'Print selected'
            }
        ],
        select: true

    });

    /*
        table = $('#spymnt_req_tbl').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    text: 'Print all',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                },
                {
                    extend: 'print',
                    text: 'Print selected'
                }
            ],
            select: true
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });

        table.buttons().container()
            .appendTo($('.col-sm-6:eq(0)', table.table().container()));*/

});
</script>