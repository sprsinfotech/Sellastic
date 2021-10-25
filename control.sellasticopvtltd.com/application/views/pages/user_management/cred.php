
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
 <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script> 

<script type="text/javascript">
$(function() {
    $('#dg').edatagrid({
        url: '<?=base_url();?>Client/getData/credential_tvl/',
        saveUrl: '<?=base_url();?>Client/insertData/credential_tvl/',
        updateUrl: '<?=base_url();?>Client/updateData/credential_tvl/',
        destroyUrl: '<?=base_url();?>Client/destroy_custom/credential_tvl/'
    });
});
</script>

<section class="page-content container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<h5 class="card-header">CREDENTIAL HISTORY</h5>
									<div class="card-body">
										<table id="dg" title="My Users" style="width:100%;height:250px" toolbar="#toolbar" idField="id"
                rownumbers="true" fitColumns="true" singleSelect="true">
                                        <thead>
                                        <tr>
                            <th field="id" editor="{type:'validatebox',options:{required:true}}">
                            ID</th>
                            <th field="userid" editor="{type:'validatebox',options:{required:true}}">User ID
                             </th>
                            <th field="mobile" editor="{type:'validatebox',options:{required:true}}">
                           Mobile No</th>
                            <th field="email" editor="{type:'validatebox',options:{required:true}}">
                            E-mail</th>
                            <th field="password" editor="{type:'validatebox',options:{required:true}}">
                            Password</th>
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
		