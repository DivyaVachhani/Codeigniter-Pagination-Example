<!DOCTYPE html>

<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

	
</head>
<body>
<div class="container">
  <h2>User</h2>
  <table class="table table-bordered" id="mydata">
    <thead>
      <tr>
      	<th>Id</th>
        <th>Name</th>
        <th>Email</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $i=1;
       foreach ($user_detail as $data) { ?>
          <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['name']; ?></td>
            <td><?= $data['email']; ?></td>
            
          </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php echo $this->pagination->create_links(); ?>
</div>

</body>
</html>

