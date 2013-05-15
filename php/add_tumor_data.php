<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Musculoskeletal Tumor Conference</title>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../jQuery/jquery-ui.css">
	<?php require('redirect_login.php'); ?>
</head>
<body>
	<ul>
		<span class="well span3">
			<legend>Logout</legend>
			<input type="button" value="logout" class="btn" id="logout"/>
			<input type="button" value="Back" class="btn"  id="back"/>
		</span>

	</ul>
		<form action="insertdata.php" method="POST" class="well span8">
			<legend>Add data</legend>
			
			<table>
					<tr>
						<td>
							<span class="span_slideno">
		  						<strong id="strong_slideno">SLIDE NO. </strong>
		  					</span>
		  				</td>
		    			<td>
		    				<span class="span_slideno">
			    				<span class="input-append">
									<input class="span3" id="slideno" name="slideno" type="text">
									<span class="add-on">466491</span>
								</span>
							</span>	
						</td>
					</tr>
			
				<tr>
					<td>
						<span class="span_hn">
		  					<strong id="strong_hn">HN </strong>
		  				</span>
		  			</td>
		  			<td>
		    			<span class="span_hn">
			    			<span class="input-append">
								<input class="span3" id="hn" name="hn" type="text">
								<span class="add-on">75348/46</span>
							</span>
						</span>
					</td>
				</tr>
			
				<tr>
					<td>
						<span class="span_name">
			  				<strong id="strong_name">NAME </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_name">
			    			<span class="input-append">
								<input class="span3" id="name" name="name" type="text">
								<span class="add-on">สมชาย ดวงดี</span>
							</span>
						</span>
					</td>
				</tr>
				
				<tr>
					<td>
						<span class="span_diagnosis">
			  				<strong id="strong_diagnosis">DIAGNOSIS </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_diagnosis">
			    			<span class="input-append">
								<input class="span3" id="diagnosis" type="text">
								<span class="add-on">OSAnecrosis 18%</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_date_biopsy">
			  				<strong id="strong_date_biopsy">DATE BIOPSY </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_date_biopsy">
			    			<span class="input-append">
								<input class="span3" id="date_biopsy" type="text">
								<span class="add-on">2013-05-12</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_age">
			  				<strong id="strong_age">AGE </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_age">
			    			<span class="input-append">
								<input class="span2" id="age" name="age" type="number">
								<span class="add-on">32</span>
							</span>
						</span>
					</td>
				</tr>


				<tr>
					<td>
						<span class="span_sex">
			  				<strong id="strong_sex">SEX </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sex">
								<select class="span2" name="sex" id="sex">
									<option value="none">none</option>
			  						<option value="Male">Male</option>
			  						<option value="Female">Female</option>
								</select>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_site">
			  				<strong id="strong_site">SITE </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_site">
								<select class="span2" name="site" id="site">
									<option value="none">none</option>
			  						<option value="Male">Left</option>
			  						<option value="Female">Right</option>
								</select>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_region_of_lesion">
			  				<strong id="strong_region_of_lesion">REGION OF LESION </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_region_of_lesion">
			    			<span class="input-append">
								<input class="span3" id="region_of_lesion" name="region_of_lesion" type="text">
								<span class="add-on">elbow</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_location">
			  				<strong id="strong_location">LOCATION </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_location">
			    			<span class="input-append">
								<input class="span3" id="location" name="location" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_catagory">
			  				<strong id="strong_catagory">CATAGORY TUMOR </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_catagory">
								<select class="span3" name="catagory" id="catagory">
									<option value="benign">Benign - bone tumor</option>
			  						<option value="malignant">Malignant - bone tumor</option>
			  						<option value="benign_soft">Benign Soft - tissue tumor</option>
			  						<option value="soft_tissue_sarcoma">Soft tissue sarcoma</option>
			  						<option value="metastasis">Metastasis</option>
			  						<option value="other">Other..</option>
								</select>
						</span>
					</td>
				</tr>

				<tr style="display:none;" id="catagory_other_p">
					<td>
						<span class="span_catagory_other">
			  				<strong id="strong_catagory_other">Other </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_catagory_other">
			    			<span class="input-append">
								<input class="span2" id="catagory_other" name="catagory_other" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>


				<tr>
					<td>
						<span class="span_sub_catagory">
			  				<strong id="strong_csub_catagory">SUB CATAGORY TUMOR </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sub_catagory">
								<select class="span3" name="sub_catagory" id="sub_catagory">
									<option value="Osteoma">Osteoma</option>
			  						<option value="Osteoid">Osteoid</option>
			  						<option value="Osteoblastoma">Osteoblastoma</option>
			  						<option value="Osteoblastorma,aggressive">Osteoblastorma,aggressive</option>
			  						<option value="Osteochondroma">Osteochondroma</option>
			  						<option value="Osteochondromatosis">Osteochondromatosis</option>
			  						<option value="Chondroma">Chondroma</option>
			  						<option value="Chondroma,juxtacortical">Chondroma,juxtacortical</option>
			  						<option value="Chondromatosis">Chondromatosis</option>
			  						<option value="Chondroblastoma">Chondroblastoma</option>
			  						<option value="Chondromyxoid fibroma">Chondromyxoid fibroma</option>
			  						<option value="Fibroma">Fibroma</option>
			  						<option value="Desmaplastic fibroma">Desmaplastic fibroma</option>
			  						<option value="Benogn Fibrous gistiocytoma">Benogn Fibrous gistiocytoma</option>
			  						<option value="GCT">GCT</option>
			  						<option value="Lipoma">Lipoma</option>
			  						<option value="Hemangioma">Hemangioma</option>
			  						<option value="ABC">ABC</option>
			  						<option value="UBC">UBC</option>
			  						<option value="Ossifying fibroma">GCT</option>
			  						<option value="Fibrous dysplasis">Fibrous dysplasis</option>
			  						<option value="Eosinophilip granularma">Eosinophilip granularma</option>
			  						<option value="Bone infect">Bone infect</option>
			  						<option value="Brown tomor">Brown tomor</option>
			  						<option value="Osteomyelitis">Osteomyelitis</option>
			  						<option value="Intraosseous ganglion">Intraosseous ganglion</option>
			  						<option value="other">Other..</option>
								</select>
						</span>
					</td>
				</tr>


				<tr style="display:none;" id="sub_catagory_other_p">
					<td>
						<span class="span_sub_catagory_other">
			  				<strong id="strong_sub_catagory_other">Sub Other </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sub_catagory_other">
			    			<span class="input-append">
								<input class="span2" id="sub_catagory_other" name="sub_catagory_other" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>

			</table>

				<center><input type="button" id="btnadd" value="เพิ่มข้อมูล" class="btn btn-primary "/></center>
		</form>


	<ul>
		<form action="login.php" method="POST" class="well span4" >
			<legend>Username</legend>
			<h3 id="username"><?php echo $_SESSION['username'];?></h3>
		</form>
	</ul>

	<ul>
		<form action="login.php" method="POST" class="well span4" >
			<legend>Status</legend>
			<h3 id="status"></h3>
		</form>
	</ul>


	<script type="text/javascript" src="../jQuery/jquery.js"></script>
	<script type="text/javascript" src="../jQuery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
	<script type="text/javascript">
   		 $( "#date_biopsy" ).datepicker({ dateFormat: 'yy-mm-dd' });
   		 $("#catagory").change(function()
   		 {
   		 	
   		 	select_sub_catagory();

   		 });
		$("#sub_catagory").change(function(){
			show_other();
		});
		$("#btnadd").click(function(){
			$("#status").html("กำลังทำการเพิ่มข้อมูล");
			var username = $("#username").html();
			var hn = $("#hn").val(); 
			var slideno = $("#slideno").val();
			var diagnosis = $("#diagnosis").val();
			var date_biopsy = $("#date_biopsy").val();
			var age = $("#age").val();
			var sex = $("#sex").val();
			var site = $("#site").val();
			var location = $("#location").val();
			var catagory = $("#catagory").val();
			var catagory_other = $("#catagory_other").val();
			var sub_catagory = $("#sub_catagory").val();
			var sub_catagory_other = $("#sub_catagory_other").val();
			var region_of_lesion = $("#region_of_lesion").val();
			var name = $("#name").val();
			//alert(username+" "+hn+" "+slideno+" "+diagnosis+" "+date_biopsy+" "+age+" "+sex+" "+site+" "+location+" "+catagory+" "+catagory_other+" "+sub_catagory+" "+sub_catagory_other);
			alert(sub_catagory_other);
			$.ajax
			({
				type: 'POST',
				url:'insertdata.php',
				data:'username='+username+'&hn='+hn+'&slideno='+slideno+'&diagnosis='+diagnosis+'&date_biopsy='+date_biopsy+'&age='+age+'&sex='+sex+'&site='+site+'&location='+location+'&catagory='+catagory+'&catagory_other='+catagory_other+'&sub_catagory='+sub_catagory+'&sub_catagory_other='+sub_catagory_other+'&region_of_lesion='+region_of_lesion+'&name='+name+'&status='+'6',
				success: function(data)
				{
					removeClassError();
					$('#status').html(data);
					if(data=='ช่อง SLIDENO ไม่ได้ใส่ค่า')
					{
						$(".span_slideno").addClass("control-group error");
						$("#strong_slideno").addClass("control-label");
						$("#slideno").focus();
					}
					if(data=='ช่อง HN ไม่ได้ใส่ค่า'||data=='ช่อง HN ใส่ค่าไม่ถูกต้อง')
					{
						$(".span_hn").addClass("control-group error");
						$("#strong_hn").addClass("control-label");
						$("#hn").focus();
					}
					if(data=='ช่อง NAME ไม่ได้ใส่ค่า')
					{
						$(".span_name").addClass("control-group error");
						$("#strong_name").addClass("control-label");
						$("#name").focus();
					}
					if(data=='การเพิ่มข้อมูลสำเร็จ')
					{
						clearData();
					}

				}
			}).error(function(){
					$('#status').html('server not responding');
				});
		});

   	function show_other()
   	{
   		$("#catagory_other_p").css('display','none');
   		$("#sub_catagory_other_p").css('display','none');
   		if($("#catagory").val()=="other")
   		 	$("#catagory_other_p").css('display','');
   		if($("#sub_catagory").val()=="other")
   		 	$("#sub_catagory_other_p").css('display','');
   	}
   	function removeClassError()
   	{
   		$(".span_slideno").removeClass("control-group error");
		$("#strong_slideno").removeClass("control-label");
		$(".span_hn").removeClass("control-group error");
		$("#strong_hn").removeClass("control-label");
		$(".span_name").removeClass("control-group error");
		$("#strong_name").removeClass("control-label");
   	}
   	function clearData()
   	{
   		$("#hn").val(""); 
		$("#slideno").val("");
		$("#diagnosis").val("");
		$("#date_biopsy").val("");
		$("#age").val("");
		$("#sex").val("");
		$("#site").val("");
		$("#location").val("");
		$("#catagory").val("");
		$("#catagory_other").val("");
		$("#sub_catagory").val("");
		$("#sub_catagory_other").val("");
		$("#region_of_lesion").val("");
		$("#name").val("");
		show_other();
		select_sub_catagory();
		$("#slideno").focus();

   	}
   	function select_sub_catagory()
   	{
   		$("#sub_catagory").children().remove();
   		 	var catagory = $("#catagory").val()=='benign' ? 0 : $("#catagory").val()=='malignant' ? 1 : $("#catagory").val()=='benign_soft' ? 2 : $("#catagory").val()=='soft_tissue_sarcoma' ? 3 : $("#catagory").val() == 'metastasis' ? 4 : 5;
   		 	var sub_catagory = new Array();
   		 		sub_catagory[0] = "<option value=\"Osteoma\">Osteoma</option><option value=\"Osteoid\">Osteoid</option><option value=\"Osteoblastoma\">Osteoblastoma</option><option value=\"Osteoblastorma,aggressive\">Osteoblastorma,aggressive</option><option value=\"Osteochondroma\">Osteochondroma</option><option value=\"Osteochondromatosis\">Osteochondromatosis</option><option value=\"Chondroma\">Chondroma</option><option value=\"Chondroma,juxtacortical\">Chondroma,juxtacortical</option>";
  				sub_catagory[0] += "<option value=\"Chondromatosis\">Chondromatosis</option>";
  				sub_catagory[0] += "<option value=\"Chondroblastoma\">Chondroblastoma</option>";
  				sub_catagory[0] += "<option value=\"Chondromyxoid fibroma\">Chondromyxoid fibroma</option>";
  				sub_catagory[0] += "<option value=\"Fibroma\">Fibroma</option>";
  				sub_catagory[0] += "<option value=\"Desmaplastic fibroma\">Desmaplastic fibroma</option>";
  				sub_catagory[0] += "<option value=\"Benogn Fibrous gistiocytoma\">Benogn Fibrous gistiocytoma</option>";
  				sub_catagory[0] += "<option value=\"GCT\">GCT</option>";
  				sub_catagory[0] += "<option value=\"Lipoma\">Lipoma</option>";
  				sub_catagory[0] += "<option value=\"Hemangioma\">Hemangioma</option>";
  				sub_catagory[0] += "<option value=\"ABC\">ABC</option>";
  				sub_catagory[0] += "<option value=\"UBC\">UBC</option>";
  				sub_catagory[0] += "<option value=\"Ossifying fibroma\">GCT</option>";
  				sub_catagory[0] += "<option value=\"Fibrous dysplasis\">Fibrous dysplasis</option>";
  				sub_catagory[0] += "<option value=\"Eosinophilip granularma\">Eosinophilip granularma</option>";
  				sub_catagory[0] += "<option value=\"Bone infect\">Bone infect</option>";
  				sub_catagory[0] += "<option value=\"Brown tomor\">Brown tomor</option>";
  				sub_catagory[0] += "<option value=\"Osteomyelitis\">Osteomyelitis</option>";
  				sub_catagory[0] += "<option value=\"Intraosseous ganglion\">Intraosseous ganglion</option>";
  				sub_catagory[0] += "<option value=\"other\">Other..</option>";

  				sub_catagory[1] = "<option value=\"Ostrocarcoma\">Ostrocarcoma</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,Chondroblastic\">Ostrocarcoma,Chondroblastic</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,Fibroblastic\">Ostrocarcoma,Fibroblastic</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,Talangiectatic\">Ostrocarcoma,Talangiectatic</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,small cell\">Ostrocarcoma,small cell</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,juxtacortical\">Ostrocarcoma,juxtacortical</option>";
  				sub_catagory[1] += "<option value=\"Ostrocarcoma,in pager\">Ostrocarcoma,in pager</option>";
  				sub_catagory[1] += "<option value=\"Chondrosarcoma\">Chondrosarcoma</option>";
  				sub_catagory[1] += "<option value=\"Chondrosarcoma,juxtacortical\">Chondrosarcoma,juxtacortical</option>";
  				sub_catagory[1] += "<option value=\"Chondrosarcoma,myxiod\">Chondrosarcoma,myxiod</option>";
  				sub_catagory[1] += "<option value=\"Chondrosarcoma,Dediff\">Chondrosarcoma,Dediff</option>";
  				sub_catagory[1] += "<option value=\"Chondrosarcoma,mesenchymal\">Chondrosarcoma,mesenchymal</option>";
  				sub_catagory[1] += "<option value=\"Ewing sarcoma\">Ewing sarcoma</option>";
  				sub_catagory[1] += "<option value=\"FibrosarcomaMalignant\">FibrosarcomaMalignant</option>";
  				sub_catagory[1] += "<option value=\"Fibrous histiocytetoma\">Fibrous histiocytetoma</option>";
  				sub_catagory[1] += "<option value=\"GCT,malignant\">GCT,malignant</option>";
  				sub_catagory[1] += "<option value=\"Plasmacytoma\">Plasmacytoma</option>";
  				sub_catagory[1] += "<option value=\"Multiple myeloma\">Multiple myeloma</option>";
  				sub_catagory[1] += "<option value=\"Lymphoma\">Lymphoma</option>";
  				sub_catagory[1] += "<option value=\"Lymphoma,momHodgin\">Lymphoma,momHodgin</option>";
  				sub_catagory[1] += "<option value=\"Liprosarcoma\">Liprosarcoma</option>";
  				sub_catagory[1] += "<option value=\"Chordoma\">Chordoma</option>";
  				sub_catagory[1] += "<option value=\"Hemagioendothelioma\">Hemagioendothelioma</option>";
  				sub_catagory[1] += "<option value=\"Hemangiopericytoma\">Hemangiopericytoma</option>";
  				sub_catagory[1] += "<option value=\"Adamantinoma\">Adamantinoma</option>";
  				sub_catagory[1] += "<option value=\"other\">Other..</option>";

  				sub_catagory[2] = "<option value=\"Superficial lipoma\">Superficial lipoma</option>";
  				sub_catagory[2] += "<option value=\"Deep lipoma\">Deep lipoma</option>";
  				sub_catagory[2] += "<option value=\"Organized hematoma\">Organized hematoma</option>";
  				sub_catagory[2] += "<option value=\"Schwannoma\">Schwannoma</option>";
  				sub_catagory[2] += "<option value=\"Fibromatosis\">Fibromatosis</option>";
  				sub_catagory[2] += "<option value=\"Myxoma\">Myxoma</option>";
  				sub_catagory[2] += "<option value=\"Hemangioma\">Hemangioma</option>";
  				sub_catagory[2] += "<option value=\"Ganglion\">Ganglion</option>";
  				sub_catagory[2] += "<option value=\"leiomyoma\">leiomyoma</option>";
  				sub_catagory[2] += "<option value=\"GCT of tendonsheath\">GCT of tendonsheath</option>";
  				sub_catagory[2] += "<option value=\"Glomus tumor\">Glomus tumor</option>";
  				sub_catagory[2] += "<option value=\"Rhabdomyoma\">Rhabdomyoma</option>";
  				sub_catagory[2] += "<option value=\"Pigmented uillo nudular synovitis\">Pigmented uillo nudular synovitis</option>";
  				sub_catagory[2] += "<option value=\"Synovial chondromatisis\">Synovial chondromatisis</option>";
  				sub_catagory[2] += "<option value=\"Neurofibromatosis\">Neurofibromatosis</option>";
  				sub_catagory[2] += "<option value=\"Benign Fibrous histiocytoma\">Benign Fibrous histiocytoma</option>";
  				sub_catagory[2] += "<option value=\"Pseudotumor\">Pseudotumor</option>";
  				sub_catagory[2] += "<option value=\"Tumoral calcinosis\">Tumoral calcinosis</option>";
  				sub_catagory[2] += "<option value=\"Neurofibroma\">Neurofibroma</option>";
  				sub_catagory[2] += "<option value=\"other\">other..</option>";

  				sub_catagory[3] = "<option value=\"Malignant Fibrous histiocytoma\">Malignant Fibrous histiocytoma</option>";
  				sub_catagory[3] += "<option value=\"Angiosarcoma\">Angiosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Liprosarcoma\">Liprosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Dermatofibrosarcoma protuberans\">Dermatofibrosarcoma protuberans</option>";
  				sub_catagory[3] += "<option value=\"Synovial sarcoma\">Synovial sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Malignant Peripheral nerve sheath\">Malignant Peripheral nerve sheath</option>";
  				sub_catagory[3] += "<option value=\"Fibrosarcoma\">Fibrosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Clear cell sarcoma\">Clear cell sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Hemangiopericytoma\">Hemangiopericytoma</option>";
  				sub_catagory[3] += "<option value=\"Alveolar soft part sarcoma\">Alveolar soft part sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Rhabdomyosarcoma\">Rhabdomyosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Extraskeletal OSA\">Extraskeletal OSA</option>";
  				sub_catagory[3] += "<option value=\"Leiomyosarcoma\">Leiomyosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Extraskeletal CHSA\">Extraskeletal CHSA</option>";
  				sub_catagory[3] += "<option value=\"Epithelioid sarcoma\">Epithelioid sarcoma</option>";
  				sub_catagory[3] += "<option value=\"other\">other..</option>";
  				

  				sub_catagory[3] = "<option value=\"Malignant Fibrous histiocytoma\">Malignant Fibrous histiocytoma</option>";
  				sub_catagory[3] += "<option value=\"Angiosarcoma\">Angiosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Liprosarcoma\">Liprosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Dermatofibrosarcoma protuberans\">Dermatofibrosarcoma protuberans</option>";
  				sub_catagory[3] += "<option value=\"Synovial sarcoma\">Synovial sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Malignant Peripheral nerve sheath\">Malignant Peripheral nerve sheath</option>";
  				sub_catagory[3] += "<option value=\"Fibrosarcoma\">Fibrosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Clear cell sarcoma\">Clear cell sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Hemangiopericytoma\">Hemangiopericytoma</option>";
  				sub_catagory[3] += "<option value=\"Alveolar soft part sarcoma\">Alveolar soft part sarcoma</option>";
  				sub_catagory[3] += "<option value=\"Rhabdomyosarcoma\">Rhabdomyosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Extraskeletal OSA\">Extraskeletal OSA</option>";
  				sub_catagory[3] += "<option value=\"Leiomyosarcoma\">Leiomyosarcoma</option>";
  				sub_catagory[3] += "<option value=\"Extraskeletal CHSA\">Extraskeletal CHSA</option>";
  				sub_catagory[3] += "<option value=\"Epithelioid sarcoma\">Epithelioid sarcoma</option>";
  				sub_catagory[3] += "<option value=\"other\">other..</option>";

  				sub_catagory[4] = "<option value=\"unknown\">unknown</option>";
  				sub_catagory[4] += "<option value=\"Breast\">Breast</option>";
  				sub_catagory[4] += "<option value=\"Lung\">Lung</option>";
  				sub_catagory[4] += "<option value=\"Thyroid\">Thyroid</option>";
  				sub_catagory[4] += "<option value=\"Prostate\">Prostate</option>";
  				sub_catagory[4] += "<option value=\"Renal\">Renal</option>";
  				sub_catagory[4] += "<option value=\"GI\">GI</option>";
  				sub_catagory[4] += "<option value=\"Liver\">Liver</option>";
  				sub_catagory[4] += "<option value=\"ENT\">ENT</option>";
  				sub_catagory[4] += "<option value=\"other\">other..</option>";
  				
  				sub_catagory[5] = "<option value=\"other\">other..</option>";
	  		switch(catagory)
	  		{ 	case 0:
	  				$("#sub_catagory").html(sub_catagory[0]);show_other();
	  				break;
	  			case 1:
	  				$("#sub_catagory").html(sub_catagory[1]);show_other();
	  				break;
	  			case 2:
	  				$("#sub_catagory").html(sub_catagory[2]);show_other();
	  				break;
	  			case 3:
	  				$("#sub_catagory").html(sub_catagory[3]);show_other();
	  				break;
	  			case 4:
	  				$("#sub_catagory").html(sub_catagory[4]);show_other();
	  				break;
	  			case 5:
	  				$("#sub_catagory").html(sub_catagory[5]);show_other();
	  				break;
	  		}		
   	}
	</script>

</body>
</html>