<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/superfish.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/magnific-popup.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/icomoon.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/animate.css">
  <script src="http://localhost/mvc/public/js/modernizr-2.6.2.min.js"></script>

  <title>Ekdolosi Events</title>
</head>

<?php
class info extends view
{

  public function output()
  {
	  $title = $this->model->title;

    require APPROOT . '/views/inc/navbar.php';
    $text = <<<EOT
		<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bootstrap Table with Add and Delete Row Feature</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
	body {
			color: #404E67;
			background: #F5F7FA;
			font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
			width: 700px;
			margin: 30px auto;
			background: #fff;
			padding: 20px;
			box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.table-title {
			padding-bottom: 10px;
			margin: 0 0 10px;
	}
	.table-title h2 {
			margin: 6px 0 0;
			font-size: 22px;
	}
	.table-title .add-new {
			float: right;
			height: 30px;
			font-weight: bold;
			font-size: 12px;
			text-shadow: none;
			min-width: 100px;
			border-radius: 50px;
			line-height: 13px;
	}
	.table-title .add-new i {
			margin-right: 4px;
	}
	table.table {
			table-layout: fixed;
	}
	table.table tr th, table.table tr td {
			border-color: #e9e9e9;
	}
	table.table th i {
			font-size: 13px;
			margin: 0 5px;
			cursor: pointer;
	}
	table.table th:last-child {
			width: 100px;
	}
	table.table td a {
			cursor: pointer;
			display: inline-block;
			margin: 0 5px;
			min-width: 24px;
	}
	table.table td a.add {
			color: #27C46B;
	}
	table.table td a.edit {
			color: #FFC107;
	}
	table.table td a.delete {
			color: #E34724;
	}
	table.table td i {
			font-size: 19px;
	}
	table.table td a.add i {
			font-size: 24px;
			margin-right: -1px;
			position: relative;
			top: 3px;
	}
	table.table .form-control {
			height: 32px;
			line-height: 32px;
			box-shadow: none;
			border-radius: 2px;
	}
	table.table .form-control.error {
			border-color: #f50000;
	}
	table.table td .add {
			display: none;
	}
	</style>
	<script>
	$(document).ready(function(){
	 $('[data-toggle="tooltip"]').tooltip();
	 var actions = $("table td:last-child").html();
	 // Append table with add row form on add new button click
			$(".add-new").click(function(){
		 $(this).attr("disabled", "disabled");
		 var index = $("table tbody tr:last-child").index();
					var row = '<tr>' +
							'<td><input type="text" class="form-control" name="name" id="name"></td>' +
							'<td><input type="text" class="form-control" name="department" id="department"></td>' +
							'<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			 '<td>' + actions + '</td>' +
					'</tr>';
			 $("table").append(row);
		 $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
					$('[data-toggle="tooltip"]').tooltip();
			});
	 // Add row on add button click
	 $(document).on("click", ".add", function(){
		 var empty = false;
		 var input = $(this).parents("tr").find('input[type="text"]');
					input.each(function(){
			 if(!$(this).val()){
				 $(this).addClass("error");
				 empty = true;
			 } else{
									$(this).removeClass("error");
							}
		 });
		 $(this).parents("tr").find(".error").first().focus();
		 if(!empty){
			 input.each(function(){
				 $(this).parent("td").html($(this).val());
			 });
			 $(this).parents("tr").find(".add, .edit").toggle();
			 $(".add-new").removeAttr("disabled");
		 }
			});
	 // Edit row on edit button click
	 $(document).on("click", ".edit", function(){
					$(this).parents("tr").find("td:not(:last-child)").each(function(){
			 $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		 });
		 $(this).parents("tr").find(".add, .edit").toggle();
		 $(".add-new").attr("disabled", "disabled");
			});
	 // Delete row on delete button click
	 $(document).on("click", ".delete", function(){
					$(this).parents("tr").remove();
		 $(".add-new").removeAttr("disabled");
			});
	});
	</script>
	</head>
	<body>
	<div class="container-lg">
			<div class="table-responsive">
					<div class="table-wrapper">
							<div class="table-title">
									<div class="row">
											<div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
											<div class="col-sm-4">
													<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
											</div>
									</div>
							</div>
							<table class="table table-bordered">
									<thead>
											<tr>
													<th>Name</th>
													<th>Department</th>
													<th>Phone</th>
													<th>Actions</th>
											</tr>
									</thead>
									<tbody>
											<tr>
													<td>Marwan Maged</td>
													<td>Administration</td>
													<td>0122445666</td>
													<td>
															<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
															<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
															<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
													</td>
											</tr>
											<tr>
													<td>Mahmoud Samy</td>
													<td>Customer Service</td>
													<td>01118833377</td>
													<td>
															<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
															<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
															<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
													</td>
											</tr>
											<tr>
													<td>Rawan Hisham</td>
													<td>Human Resources</td>
													<td>01001111999</td>
													<td>
															<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
															<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
															<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
													</td>
											</tr>
									</tbody>
							</table>
					</div>
			</div>
	</div>
	</body>
	</html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}


?>
