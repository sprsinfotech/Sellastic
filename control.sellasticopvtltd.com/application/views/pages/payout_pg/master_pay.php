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

    <?
/*
$result = $this->crdm->getmultidata();

print_r($result->result());
*/
?>

    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />

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


    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">PAYMENT REQUEST HISTORY</h5>
                    <div class="card-body">
                        <table id="pymnt_req_tbl1" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">Check</th>
                                    <th width="10%">ID</th>
                                    <th width="10%">NAME</th>
                                    <th width="10%">ACC NUM</th>
                                    <th width="10%">IFSC</th>
                                    <th width="10%">AMOUNT</th>
                                    <th width="10%">STATUS</th>
                                    <th width="10%">DATE</th>
                                    <th width="6.5%">EDIT</th>
                                    <th width="6.5%">VIEW</th>
                                    <th width="7%">DELETE</th>
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
    var table, table1;
    $(function() {
        table1 = $('#pymnt_req_tbl1').DataTable({
            scrollY: "300px",
            scrollX: true,
            paging: true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url('datatable/fetch_multi_tbl_data/'); ?>",
                type: "POST",
                data: {
                    tbl: 'master_pay_tbl',
                    tbl1: 'fund_acc_tbl'
                },
            },
            columns: [{
                    data: "action_sel"
                },
                {
                    data: "id"
                },
                {
                    data: "holder_name"
                },
                {
                    data: "acc_num"
                },
                {
                    data: "ifsc"
                },
                {
                    data: "m_amount"
                },
                {
                    data: "status"
                }, {
                    data: "date"
                },
                {
                    data: "action_edit"
                },
                {
                    data: "action_view"
                },
                {
                    data: "action_delete"
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

    });
    </script>

</section>
</div>

</div>
</div>