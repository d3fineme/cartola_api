<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Atacante',     11],
          ['Zagueiro',      2],
          ['Lateral',  2],
          ['Meio', 2],
          ['Goleiro',    7],
          ['Técnico', 10]
        ]);

        var options = {
          title: 'Posições nos destaques'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<div id="piechart" style="width: 100%; height: 500px;"></div>