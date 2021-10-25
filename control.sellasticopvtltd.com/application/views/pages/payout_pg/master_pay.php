<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>
<script type="text/javascript" src="datagrid-export.js"></script>



<script type="text/javascript">
$(function() {
    $('#dg').edatagrid({
        url: '<?=base_url();?>Client/getData/master_pay_tbl/',
        saveUrl: '<?=base_url();?>Client/insertData/master_pay_tbl/',
        updateUrl: '<?=base_url();?>Client/updateData/master_pay_tbl/',
        destroyUrl: '<?=base_url();?>Client/destroy_custom/master_pay_tbl/'
    });
});
</script>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">NEFT HISTORY</h5>
                <div id="toolbar">
                    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true"
                        onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true"
                        onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true"
                        onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true"
                        onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>


                        
                        <a href="javascript:;" class="easyui-linkbutton" onclick="$('#dg').datagrid('toExcel','dg.xls')">ExportToExcel</a>
        <a href="javascript:;" class="easyui-linkbutton" onclick="$('#dg').datagrid('print','DataGrid')">Print</a>
                </div>
                <div class="card-body">
                    <table id="dg" title="My Users" style="width:100%;height:250px" toolbar="#toolbar" idField="id"
                        rownumbers="true" fitColumns="true" singleSelect="true">
                        <thead>
                            <tr>

                                <th field="id" editor="{type:'validatebox',options:{required:true}}">
                                    ID</th>
                                <th field="userid" editor="{type:'validatebox',options:{required:true}}">User ID
                                </th>
                                <th field="	amount" editor="{type:'validatebox',options:{required:true}}">
                                    Amount</th>
                                <th field="m_amount" editor="{type:'validatebox',options:{required:true}}">
                                    Main amount</th>
                                <th field="tr_type" editor="{type:'validatebox',options:{required:true}}">
                                    Transectio type</th>
                                <th field="remarks" editor="{type:'validatebox',options:{required:true}}">
                                    Remarks</th>
                                <th field="status" editor="{type:'validatebox',options:{required:true}}">
                                    Status</th>

                            </tr>
                        </thead>
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

// export with customized rows
$('#dg').datagrid('toExcel', {
    filename: 'datagrid.xls',
    worksheet: 'Worksheet',
    caption: 'Caption',
    fields: ['itemid','productid'],
    rows: rows,
    footer: [{
        productid: 'Summary',
        listprice: 30
    },{
        productid: 'Summary',
        listprice: 40
    }]
});
</script>