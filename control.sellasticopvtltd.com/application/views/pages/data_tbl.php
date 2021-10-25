<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>

<script type="text/javascript">
$(function() {
    $('#dg').edatagrid({
        url: '<?=base_url();?>Client/getData/test_tvl/',
        saveUrl: '<?=base_url();?>Client/insertData/test_tvl/',
        updateUrl: '<?=base_url();?>Client/updateData/test_tvl/',
        destroyUrl: '<?=base_url();?>Client/destroy_custom/test_tvl/'
    });
});
</script>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">TEST TABLE</h5>
                <div class="card-body">
                    <table id="dg" title="My Users" style="width:100%;height:250px" toolbar="#toolbar" idField="id"
                        rownumbers="true" fitColumns="true" singleSelect="true">
                        <thead>
                            <tr>

                                <th field="id" width="50"
                                    editor="{type:'validatebox',options:{validType:'text', required:true}}">ID
                                </th>
                                <th field="userid" width="50" editor="{type:'validatebox',options:{required:true}}">
                                    Useid</th>
                                <th field="name" width="50" editor="{type:'validatebox',options:{required:true}}">
                                    name</th>
                                <th field="phone" width="50" editor="{type:'validatebox',options:{required:true}}">
                                    Phone</th>

                                <th field="status" width="50" editor="{type:'validatebox',options:{required:true}}">
                                    Status</th>
                                <th field="timestamp" width="50" editor="{type:'validatebox',options:{required:true}}">
                                    timestamp</th>
                            </tr>
                        </thead>
                    </table>

                    <div id="toolbar">
                        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true"
                            onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
                        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true"
                            onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
                        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true"
                            onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
                        <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true"
                            onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
</div>

</div>
</div>