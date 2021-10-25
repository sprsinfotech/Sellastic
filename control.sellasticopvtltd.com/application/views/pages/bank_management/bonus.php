
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
 <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script> 

<script type="text/javascript">
$(function() {
    $('#dg').edatagrid({
        url: '<?=base_url();?>Client/getData/wallet_bonus_tvl/',
        saveUrl: '<?=base_url();?>Client/insertData/wallet_bonus_tvl/',
        updateUrl: '<?=base_url();?>Client/updateData/wallet_bonus_tvl/',
        destroyUrl: '<?=base_url();?>Client/destroy_custom/wallet_bonus_tvl/'
    });
});
</script>

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <table id="dg" title="My Users" style="width:100%;height:250px" toolbar="#toolbar" idField="id"
                rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                       
                            <th field="id" editor="{type:'validatebox',options:{required:true}}">
                            ID</th>
                            <th field="userid" editor="{type:'validatebox',options:{required:true}}">User ID
                             </th>
                            <th field="date" editor="{type:'validatebox',options:{required:true}}">
                            Date</th>
                            <th field="amount" editor="{type:'validatebox',options:{required:true}}">
                            Amount</th>
                            <th field="status" editor="{type:'validatebox',options:{required:true}}">
                            Status</th>
                            <th field="timestamp" editor="{type:'validatebox',options:{required:true}}">
                            Time stamp</th>
                           
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

