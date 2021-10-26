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


<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">USER HISTORY</h5>
                <div class="card-body">
                    <table id="pymnt_req_tbl" class="table table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="3%"></th>
                                <th width="5%">Update</th>
                                <th width="5%">Delete</th>
                                <th width="5%">Delete</th>
                                <th width="2%">ID.</th>
                                <th width="10%">Name</th>
                                <th width="10%">User ID</th>
                                <th width="10%">E-mail</th>
                                <th width="15%">Mobile No</th>
                                <th width="15%">Address</th>
                                <th width="15%">District</th>
                                <th width="5%">State</th>
                                <th width="15%">Pincode</th>
                                <th width="15%">City</th>
                                <th width="5%">Country</th>
                                <th width="5%">Sponser-ID</th>
                                <th width="5%">Sponser Name</th>
                                <th width="5%">Status</th>
                                <th width="5%">timestamp</th>
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
                tbl: 'user_tvl'
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
                data: "name"
            },
            // {
            //   data: null,
            //  render: function(data, type, row) {
            //     // return data.f_name + ' ' + data.m_name + ' ' + data.l_name;
            //  }
            // },
            {
                data: "userid"
            },
            {
                data: "email"
            },
            {
                data: "mobile"
            },
            {
                data: "address"
            },
            {
                data: "district"
            },
            {
                data: "state"
            },
            {
                data: "pincode"
            },
            {
                data: "city"
            },
            {
                data: "country"
            },
            {
                data: "sponserid"
            },
            {
                data: "sponser_name"
            },
            {
                data: "status"
            },
            {
                data: "timestamp"
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