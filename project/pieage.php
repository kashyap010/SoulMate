<html>
<body>
    <?php
        include 'agedemo.php';
    ?>
    <div id="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var range1 = "<?php echo $range1; ?>";
    var range2 = "<?php echo $range2 ?>";
    var range3 = "<?php echo $range3; ?>";
    var range4 = "<?php echo $range4 ?>";
    
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
            ['gender', 'number'],
            ['18-24', parseInt(range1)],
            ['25-40', parseInt(range2)],
            ['41-50', parseInt(range3)],
            ['>50', parseInt(range4)]
        ]);  
        var options = {'title':'Age demographic','width':550, 'height':400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }    
    </script>
</body>
</html>