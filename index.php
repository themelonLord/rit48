<!DOCTYPE html>

<html>
<head>
    <title>Index - Craigslist x Ebay</title>
    <meta name="viewport" content="width=device-width, initial-scale=.5">
    <link type="text/css" rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.css" />    
    <link type="text/css" rel="stylesheet" href="assets/libraries/slider/css/slider.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/main.css"/>
    <script src="assets/js/main.js"></script>	
</head>

<body>
    
    <?php include ('assets/php/header.php'); ?>
    <div id="welcome">
        <?php include ('assets/php/welcome.php'); ?>
    </div>
    
    <div id="main">
        <input class="input" id="searchBox"></input>
        <button class="btn btn-primary" type="button" onclick="$('#list').empty(); search(document.getElementById('searchBox').value);">Get info</button>
        
        <div class="panel-group" id="accordion" >
            <div id="list"></div>
        </div>
    </div>
    
    
    <script src="assets/libraries/jquery/jquery-2.0.3.min.js"></script>
    <script src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>  
    <script src="assets/libraries/slider/js/bootstrap-slider.js"></script>
    <script src="assets/js/sliderFile.js"></script>
    
    <script>
        //initialize keydown search
        $("#searchBox").keyup(function(e){
                if (e.keyCode == 13) {
                    $('#list').empty();
                    search(document.getElementById('searchBox').value);
                }
            });
    </script>
    
</body>

</html>
