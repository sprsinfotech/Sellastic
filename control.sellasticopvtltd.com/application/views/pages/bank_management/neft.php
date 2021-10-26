<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

</script>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">NEFT HISTORY</h5>
                <div class="card-body">

                    <div class="card-body">
                        <table id="pymnt_req_tbl" class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th width="3%"></th>
                                    <th width="5%">Update</th>
                                    <th width="5%">Delete</th>
                                    <th width="2%">ID.</th>
                                    <th width="10%">User ID</th>
                                    <th width="10%">Fund ID</th>
                                    <th width="15%">Account Holder</th>
                                    <th width="15%">IFSC Code</th>
                                    <th width="15%">Acc Number</th>
                                    <th width="15%">Contact id</th>
                                    <th width="15%">Acc Type</th>
                                    <th width="5%">Status</th>
                                    <th width="15%">Date</th>
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
        paging: false,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "<?php echo base_url('datatable/fetch_products_list_data/'); ?>",
            type: "POST",
            data: {
                tbl: 'fund_acc_tbl'
            },
        },
        columns: [{
                data: "action_sel"
            },
            {
                data: "action_edit"
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
                data: "fund_id"
            },
            {
                data: "holder_name"
            },
            {
                data: "ifsc"
            },
            {
                data: "acc_num"
            },
            {
                data: "contact_id"
            },
            {
                data: "account_type"
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
        dom: 'Bfrtip',
        buttons: ['excel', {
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
});
</script>