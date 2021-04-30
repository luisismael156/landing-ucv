<?php
include "conn.php";
$db =  connect();
$query=$db->query("select * from ubdepartamento");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
        $("#idDepa").change(function(){
			$.get("departamento.php","idDepa="+$("#idDepa").val(), function(data){
				$("#idProv").html(data);
				console.log(data);
			});
		});

		$("#idProv").change(function(){
			$.get("distritos.php","idProv="+$("#idProv").val(), function(data){
				$("#ciudad_id").html(data);
				console.log(data);
			});
		});
    
    
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var depart = $("#idDepa").val();
        var provin = $("#idProv").val();
        var distri = $("#ciudad_id").val();
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {depa: depart, prov: provin, dist: distri, term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
   <div class="input-group">
        <select id="idDepa" class="form-control departamento" name="idDepa" required>
            <option value="">Seleccione Departamento</option>
            <?php foreach($countries as $c):?>
            <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="input-group">
        <select id="idProv" class="form-control provincia" name="idProv" required>
            <option value="">Seleccione Provincia</option>
        </select>
    </div>
    <div class="input-group">
        <select id="ciudad_id" class="form-control distrito" name="ciudad_id" required>
            <option value="">Seleccione Distrito</option>
        </select>
    </div>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search country..." />
        <div class="result"></div>
    </div>

</body>
</html>