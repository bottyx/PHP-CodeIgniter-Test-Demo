<html>
<head>
	<title>Ejemplo</title>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<script>
$( document ).ready(function() {
   
    $( "#guardar" ).click(function() {
    	var a  = $('input[name="a[]"]').map(function() {return this.value;}).get();
    	var b  = $('input[name="b[]"]').map(function() {return this.value;}).get();
    	var c  = $('input[name="c[]"]').map(function() {return this.value;}).get();
    	var d  = $('input[name="d[]"]').map(function() {return this.value;}).get();

		$.post( "<?php echo base_url();?>index.php/hitos/editHitos",{a:a , b:b , c:c , d:d}, function( data ) {
		  	alert('termina');
		});
	   
	});
});
</script>
<body>

<form id="myform">
	<h1>Este es un ejemplo del trabajo</h1>
	<?php $count=0; ?>
	<?php foreach ($hitos as $dato): ?>
		
		<table class="table table-hover">
      
        <tr>
          <th><input type="hidden" name="a[]" value="<?php echo $hitos[$count]['idHito']?>"></th>
          <td><input type="text" name="b[]" value="<?php echo $hitos[$count]['description']?>"></td>
          <td><input type="text" name="c[]" value="<?php echo $hitos[$count]['inicio']?>"></td>
          <td><input type="text" name="d[]" value="<?php echo $hitos[$count]['fin']?>"></td>
        </tr>
      
		<?php $count++; ?>
	<?php endforeach ?>

		</tbody>
    </table>
</form>
 <button id="guardar">Guardar</button>
</body>
</html>