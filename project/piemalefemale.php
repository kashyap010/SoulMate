<html>
<body>
    <?php
        include 'malefemale.php';
    ?>
    <div id="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    var male = "<?php echo $male; ?>";
    var female = "<?php echo $female ?>";
    
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
            ['gender', 'number'],
            ['Male', parseInt(male)],
            ['Female', parseInt(female)]
        ]);  
        var options = {'title':'Gender Ratio','width':415, 'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }    
    </script>
</body>
</html>