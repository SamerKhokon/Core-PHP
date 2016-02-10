<!DOCTYPE html>
<html ng-app="myFirstApp">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	   <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
</head>
<body ng-controller="GetCustomers">


<div class="container-fluid">



    <div class="row">
		<div class="span12">
		   <table class="table table-stripped">
		    <thead>
				<tr><th>ID</th><th>Company</th></tr>
			</thead>
			<tbody>
				<tr ng-repeat="profile in profiles">
					<td>{{profile.id}}</td>
					<td>{{profile.detail}}</td>
					</tr>
			</tbody>   
		   </table>
		</div>
    </div> 

	
</div>

<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>