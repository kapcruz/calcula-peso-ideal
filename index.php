<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >
  <meta charset="UTF-8">
  <title>calculadora peso</title>


  <style>
    
#calcule{
  margin-top: 30px;
}

.btn {
    padding: 10px 10px;
    border: 0 none;
    letter-spacing: 1px;
    text-transform: uppercase;
}
 
.btn:focus, .btn:active:focus, .btn.active:focus, .form-contro:focus, .form-contro:active:focus, .form-contro.active:focus {
    outline: 0 none;
}
 
.btn-primary {
    background: #ba275c;
    color: #ffffff;
}
 
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background: #ba275c;
}
 
.btn-primary:active, .btn-primary.active {
    background: #ba275c;
    box-shadow: none;
}

.grid-6 {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[6];
      grid-template-columns: repeat(6, 1fr);
  -ms-grid-rows: auto;
      grid-template-rows: auto;
  grid-gap: 1em 1em;
}

.span-1 { -ms-grid-column: span 1; grid-column: span 1; }

.grid-6 select {
  height: 50px;
  width: 150px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

  </style>

</head>
<body class="container">

<p>Insira seu peso e sua altura antes da gravidez</p>

<form action='#' method='post' class='row grid-6'>
  <div class='form-group col span-1'>
    <label for='dia'>Peso</label>
    <input class='form-control' id='dia'  type='text' name='peso' placeholder='peso'/>
  </div>
  <div class='form-group col span-1'>
    <label for='altura'>Altura</label>
    <input type='text' class='form-control' id='altura' name='altura' placeholder='altura' />
  </div>  
  <div class='col span-1'>
    <button id='calcule' class='btn btn-primary' style='background: #ba275c; color: #FFFFFF;' type='submit'>Calcule</button>
  </div>
</form>
  

  <p class='calculoimc'></p>



<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>  

 $("#calcule").click(function(){
    jQuery('form').submit(function(){
    var dados = jQuery( this ).serialize();

    jQuery.ajax({
      type: "POST",
      dataType: 'html',
      url: "calculo.php",
      data: dados,
      success: function( data )
      {
        $(".calculoimc").html(data);
      }
    });
    return false;
  });
}); 

</script>

</body>
</html>
