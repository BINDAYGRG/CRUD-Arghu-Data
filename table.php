
<?php 

require_once "classes/config.php";
$obj= new connectdatabase();
$connectiondb=$obj->connectiondb();

$sql="SELECT id_arghu,
nameeng,
namenep,
oldaddresseng,
oldaddressnep,
currentaddresseng,
currentaddressnep,
vetieng,
vetinep,
syaieng,
syainep,
category,
reference
from data_arghu where nameeng!='' and namenep!='' ORDER by category, id_arghu ASC";
$result=mysqli_query($connectiondb,$sql);

$sql2 = "DELETE FROM `data_arghu` WHERE nameeng='' and namenep='' and oldaddresseng='' and currentaddresseng=''";

$result2=mysqli_query($connectiondb,$sql2);


?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545; color: white; font-weight: bold;">
			<tr>
				<td>नाम</td>
				<td>पुरानो ठेगाना</td>
				<td>हालको ठेगाना</td>
				<td>भेटि</td>
				<td>स्याइस्याइ</td>
				<td>कैफियत</td>
				<td hidden>कैफियत</td>
				<td hidden>कैफियत</td>
				<td hidden>कैफियत</td>
 				<td>मिलाउने / हटाउने</td>
 			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>नाम</td>
				<td>पुरानो ठेगाना</td>
				<td>हालको ठेगाना</td>
				<td>भेटि</td>
				<td>स्याइस्याइ</td>
				<td>कैफियत</td>
				<td hidden>कैफियत</td>
				<td hidden>कैफियत</td>
				<td hidden>कैफियत</td>
				<td>मिलाउने / हटाउने</td>

			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($fetecheddata=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td hidden><?php echo $fetecheddata[1] ?></td>
					<td><?php echo $fetecheddata[2] ?></td>
					<td hidden><?php echo $fetecheddata[3] ?></td>
					<td hidden><?php echo $fetecheddata[5] ?></td>
					<td><?php echo $fetecheddata[4] ?></td>
					<td><?php echo $fetecheddata[6] ?></td>
					<td>रु. <?php echo $fetecheddata[8] ?></td>
					<td><?php if($fetecheddata[9]!=''){ echo "रु. $fetecheddata[10]";} else{ echo "-";} ?></td>
					<td><?php if($fetecheddata[12]!=' '){ echo $fetecheddata[12]; } else {echo "-";} ?></td>
 					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editdatamodal" onclick="updateData('<?php echo $fetecheddata[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
				
						<span class="btn btn-danger btn-sm" onclick="deletedata('<?php echo $fetecheddata[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>