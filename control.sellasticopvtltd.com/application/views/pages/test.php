<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
 <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script> 

<script type="text/javascript">
$(function() {
    $('#dg').edatagrid({
        url: '<?=base_url();?>Client/getData/neft_tvl/',
        saveUrl: '<?=base_url();?>Client/insertData/neft_tvl/',
        updateUrl: '<?=base_url();?>Client/updateData/neft_tvl/',
        destroyUrl: '<?=base_url();?>Client/destroy_custom/neft_tvl/'
    });
});
</script>

					<section class="page-content container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<h5 class="card-header">Data Tables</h5>
									<div class="card-body">
										<table id="dg" title="My Users" style="width:100%;height:250px" toolbar="#toolbar" idField="id"
                rownumbers="true" fitColumns="true" singleSelect="true">
                                        <thead>
                                        <tr>
                       
                                               <th field="id" editor="{type:'validatebox',options:{required:true}}">
                                               ID</th>
                                               <th field="userid" editor="{type:'validatebox',options:{required:true}}">User ID
                                                </th>
                                               <th field="ac_number" editor="{type:'validatebox',options:{required:true}}">
                                               Ac. Number</th>
                                               <th field="acc_phon_number" editor="{type:'validatebox',options:{required:true}}">
                                               Phone Number</th>
                                               <th field="ifsc" editor="{type:'validatebox',options:{required:true}}">
                                               IFSC Code</th>
                                               <th field="bank_name" editor="{type:'validatebox',options:{required:true}}">
                                               Bank Name</th>
                                               <th field="ac_holder" editor="{type:'validatebox',options:{required:true}}">
                                               Account Holder</th>
                                               <th field="status" editor="{type:'validatebox',options:{required:true}}">
                                                Status</th>
                                               <th field="time" editor="{type:'validatebox',options:{required:true}}">
                                               Time </th>
                           
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
		