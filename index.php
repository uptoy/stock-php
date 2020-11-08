<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php
$url="https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=IBM&apikey=demo&datatype=csv";
$data=file_get_contents($url);
$row =explode("\n",$data);
$count =count($row)-1;
for($x=0; $x<$count; $x++)
{
    $day[]=explode(",",$row[$x]);
}

?>







<div class="container">
<div class="col-md-12" style="margin-top:20px;">
    <div style="text-align:center;">
         <h1>Stock System Using API </h1>
         <a href="http://deepcoder.cf">DeepCoder.cf</a>
    </div>
</div>
    <div class="row" style="margin-left:350px;margin-top:50px;" >
	    <form class="form-inline" id="form">
	    	<div class="form-group">
	    		<input type="text" placeholder="Enter Company Symbol" value="Microsoft-MSFT" class="form-control" id="name">
	    	</div>
	    	<input type="submit" class="btn btn-success" style="margin-left:20px;"value="Submit" />
	    </form>
	</div>
	
	<div class="row" style="margin-top:50px;">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th><?php echo $day[0][0]?></th>
					<th><?php echo $day[0][1]?></th>
					<th><?php echo $day[0][2]?></th>
					<th><?php echo $day[0][3]?></th>
					<th><?php echo $day[0][4]?></th>
					<th><?php echo $day[0][5]?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				for($x=1; $x<$count; $x++)
				{
					$day[]=explode(",",$row[$x]);
					echo "<tr>";
					echo "<th>".$x."</th>";
					echo "<td>".$day[$x][0]."</td>";
					echo "<td>".$day[$x][1]."</td>";
					echo "<td>".$day[$x][2]."</td>";
					echo "<td>".$day[$x][3]."</td>";
					echo "<td>".$day[$x][4]."</td>";
					echo "<td>".$day[$x][5]."</td>";
					echo "</tr>";
				}				
				?>
			</tbody>
		</table>
	</div>
</div>

</body>
</html>