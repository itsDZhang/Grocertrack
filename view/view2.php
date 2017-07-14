


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  
	  <link href="../css/stylesView.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
	
	<form method="get" action="./viewHandle2.php" class="col s12">
	
	<div class="container">
		<select name="storeName">
		  <option value="" disabled selected>Choose your option</option>
		  <option value="Loblaw">Loblaw</option>
		  <option value="Zehrs">Zehrs</option>
		  <option value="No Frills">No Frills</option>
            <option value="Value-mart">Value-mart</option>
            <option value="President's Choice Financial">President's Choice Financial</option>
            <option value="Arz Bakery">Arz Bakery</option>
            <option value="Wholesale Club">Wholesale Club</option>
            <option value="Fortinos">Fortinos</option>
            <option value="T&T Supermarket">T&T Supermarket</option>
            <option value="Atlantic Superstore">Atlantic Superstore</option>
		</select>
		<label>Stores</label>
	  </div>
		<br>
        <br>
        <br>
        
        <div class="container">
        <input name="date" id="txtstartdate" type="date" class="datepicker" />
        
<!--        <input name="endDate" id="txtenddate" type="date" class="datepicker"/>-->
        </div>
		<br>
		<br>
		
		<div class="container">
<!--
			<div class="input-field col s4">
              <input id="custID" name="custID" type="text" class="validate">
              <label for="custID">CustomerID</label>
            </div>
-->
			
			<button class="btn waves-effect waves-light" type="submit" >Submit
            <i class="material-icons right">send</i>
        </button>
            
            </div>
		
		
		</form>
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
	  
	  <script type="text/javascript">
		 $(document).ready(function() {
    $('select').material_select();
  });
	  
	  </script>
        
        <script type="text/javascript">
        
        $("#txtstartdate").datepicker({

            minDate: '01/01/2017',
          onSelect: function(date) {
            $("#txtenddate").datepicker('option', 'minDate', date);
          }
        });

        $("#txtenddate").datepicker({});
        
        
        </script>
    </body>
  </html>