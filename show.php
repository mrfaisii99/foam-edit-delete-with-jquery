<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">


<title>Hello, world!</title>
</head>
<body>

<table id="table_id" class="display bg-secondary">
<thead>



<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>city</th>
<th>state</th>
<th>action</th>


</tr>
</thead>

<tbody>
    <?php

error_reporting(0);

include 'include/config.php';
$sql = "SELECT * FROM rcompany";
$res = mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($res)) {
   

 echo    ' <tr>
<td>'.$row['id'].'</td>
<td>'.$row['firstname'].'</td>
<td>'.$row['lastname'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['city'].'</td>
<td>'.$row['state'].'</td>


<td><a href="edit.php?faisi='.$row['id'].'" class="btn btn-warning">edit</a>
<a href="delete.php?id='.$row['id'].'" class="btn btn-danger">delete</a>
</td>
</tr>';

}
?>

</tbody>
</table>














<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
</body>
</html>






<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );


</script>