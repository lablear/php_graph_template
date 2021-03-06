<html>
    <head>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            // Load the Visualization API and the piechart package.
            google.load('visualization', '1', {'packages': ['corechart']});
            
            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            function drawChart() {
                var jsonData = $.ajax({
                    url: "getData.php",
                    dataType: "json",
                    async: false
                }).responseText;

                // Create our data table out of JSON data loaded from server.
                var data = new google.visualization.DataTable(jsonData);

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, {width: 400, height: 240});
            }
        </script>

    </head>
    <body>
        <h1>Frequence of shoesizes</h1>
        <!-- div container der holder på chart elementet START-->
        <div id="chart_div"></div>
        <!-- Chart div SLUT-->
    </body>
</html>
