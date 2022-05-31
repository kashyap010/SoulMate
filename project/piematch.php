<html>
<body>
    <?php
        include 'matchunmatched.php';
    ?>
    <div id="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    var mat = "<?php echo $matched; ?>";
    var unmat = "<?php echo $unmatched ?>";
    
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
            ['gender', 'number'],
            ['match', parseInt(mat)],
            ['unmatched', parseInt(unmat)]
        ]);  
        var options = {'title':'Match ratio','width':550, 'height':400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }    
    </script>
</body>
</html>