<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						मन प्रसाद गुरुङ को अर्घौ को भेटि र स्याइस्याइ
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Add Data <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tableDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By Binaya Gurung
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">नया डाटा भर्नुहोस्</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form id="formadddata" name=Form1 class="needs-validation">
						
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">नाम (English)</label>
            <input name="nameeng" type="text" class="form-control" id="nameeng" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">नाम (नेपाली)</label>
            <input onselect=javascript:convert(); name="namenep" type="text" class="form-control" id="namenep" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">पुरानो ठेगाना (English)</label>
            <input type="text" class="form-control" id="oldaddresseng" name="oldaddresseng" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">पुरानो ठेगाना (नेपाली)</label>
            <input type="text" class="form-control" id="oldaddressnep" onselect=javascript:convert(); name="oldaddressnep" required>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">हालको ठेगाना (English)</label>
            <input type="text" class="form-control" id="currentaddresseng" name="currentaddresseng" placeholder="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">हालको ठेगाना (नेपाली)</label>
            <input type="text" class="form-control" id="currentaddressnep" onselect=javascript:convert(); name="currentaddressnep" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">नाता</label>
            <select class="custom-select d-block w-100" id="category" name="category" required>
              <option value="">रोज्नुहोस...</option>
              <option>भाइ खलग</option>
     		  <option>समाजको सदस्य</option>
      	 	  <option>इस्टमित्र</option>
      	 	  <option>अन्य</option>            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="state">भेटि</label>
            <input type="text" class="form-control" onkeyup=javascript:convert(); id="vetieng" name="vetieng" required>
            <input hidden type="text" class="form-control" id="vetinep" name="vetinep" required>
          </div>
          <div class="col-md-3 mb-4">
            <label for="zip">स्याइस्याइ</label>
            <input type="text" class="form-control" onkeyup=javascript:convert(); id="syaieng" name="syaieng" required>
            <input hidden type="text" class="form-control" id="syainep" name="syainep" required>
          </div>
        </div>

         <div class="mb-3">
          <label for="address2">कैफियत<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" onkeyup=javascript:convert(); id="reference" name="reference">
          <input name="reference2" id="reference2" class="form-control" readonly />
              
            </p>
         </div>
      </form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" id="btnsubmitdata" class="btn btn-primary">AddData</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="editdatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">डाटा इडिट गर्नुहोस्</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formadddataedit" name=Form2 class="needs-validation">
						
						<input type="text" hidden="" id="id_arghu" name="id_arghu">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">नाम (English)</label>
            <input name="nameeng2" type="text" class="form-control" id="nameeng2" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">नाम (नेपाली)</label>
            <input onselect=javascript:convert(); name="namenep2" type="text" class="form-control" id="namenep2" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">पुरानो ठेगाना (English)</label>
            <input type="text" class="form-control" id="oldaddresseng2" name="oldaddresseng2" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">पुरानो ठेगाना (नेपाली)</label>
            <input type="text" class="form-control" id="oldaddressnep2" onselect=javascript:convert(); name="oldaddressnep2" required>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">हालको ठेगाना (English)</label>
            <input type="text" class="form-control" id="currentaddresseng2" name="currentaddresseng2" placeholder="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">हालको ठेगाना (नेपाली)</label>
            <input type="text" class="form-control" id="currentaddressnep2" onselect=javascript:convert(); name="currentaddressnep2" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">नाता</label>
            <select class="custom-select d-block w-100" id="category2e" name="category2e" required>
              <option value="">रोज्नुहोस...</option>
              <option>भाइ खलग</option>
     		  <option>समाजको सदस्य</option>
      	 	  <option>इस्टमित्र</option>
      	 	  <option>अन्य</option>            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="state">भेटि</label>
            <input type="text" class="form-control" onkeyup=javascript:convert(); id="vetieng2e" name="vetieng2e" required>
            <input hidden type="text" class="form-control" id="vetinep2e" name="vetinep2e" required>
          </div>
          <div class="col-md-3 mb-4">
            <label for="zip">स्याइस्याइ</label>
            <input type="text" class="form-control" onkeyup=javascript:convert(); id="syaieng2e" name="syaieng2e" required>
            <input hidden type="text" class="form-control" id="syainep2e" name="syainep2e" required>
          </div>
        </div>

         <div class="mb-3">
          <label for="address2">कैफियत<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" onkeyup=javascript:convert(); id="reference2e" name="reference2e">
          <input name="reference2e2" id="reference2e2" class="form-control" readonly />
              
            </p>
         </div>
      </form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-warning" id="btnupdate">Update</button>
				</div>
			</div>
		</div>
	</div>

        
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnsubmitdata').click(function(){
			datas=$('#formadddata').serialize();

			$.ajax({
				type:"POST",
				data:datas,
				url:"process/add.php",
				success:function(r){
					if(r==1){
						$('#formadddata')[0].reset();
						$('#tableDatatable').load('table.php');
						alertify.success("बधाई छ यो रेकर्ड एड भयो :D");
					}else{
						alertify.error("माफ गर्नुहोस यो रेकर्ड एड भएन:(");
					}
				}
			});
		});

		$('#btnupdate').click(function(){
			datas=$('#formadddataedit').serialize();

			$.ajax({
				type:"POST",
				data:datas,
				url:"process/update.php",
				success:function(r){
					if(r==1){
						$('#tableDatatable').load('table.php');
						alertify.success("बधाई छ यो रेकर्ड अपडेट भयो :D");
					}else{
						alertify.error("माफ गर्नुहोस यो रेकर्ड अपडेट भएन:(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tableDatatable').load('table.php');
	});
</script>

<script type="text/javascript">
	function updateData(id_arghu){
		$.ajax({
			type:"POST",
			data:"id_arghu=" + id_arghu,
			url:"process/getdata.php",
			success:function(r){
				datas=jQuery.parseJSON(r);
				$('#id_arghu').val(datas['id_arghu']);
				$('#nameeng2').val(datas['nameeng']);
				$('#namenep2').val(datas['namenep']);
				$('#oldaddresseng2').val(datas['oldaddresseng']);
				$('#oldaddressnep2').val(datas['oldaddressnep']);
				$('#currentaddresseng2').val(datas['currentaddresseng']);
				$('#currentaddressnep2').val(datas['currentaddressnep']);
				$('#vetieng2e').val(datas['vetieng']);
				$('#syaieng2e').val(datas['syaieng']);
				$('#category2e').val(datas['category']);
				$('#reference2e2').val(datas['reference']);
				$('#reference2e').val(datas['reference']);
			}
		});
	}

	function deletedata(id_arghu){
		alertify.confirm('साच्चिकै डिलिट गर्ने?', function(){ 

			$.ajax({
				type:"POST",
				data:"id_arghu=" + id_arghu,
				url:"process/delete.php",
				success:function(r){
					if(r==1){
						$('#tableDatatable').load('table.php');
						alertify.success("बधाई छ डिलिट भयो!");
					}else{
						alertify.error("माफ गर्नुहोस यो रेकर्ड डिलिट भएन...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>