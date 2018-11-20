<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Rodada', 'Expenses'],
        ['1',  1000],
        ['2',  1170],
        ['3',  660],
        ['4',  1030]
      ]);

      var options = {
        title: 'Histórico de pontuação do clube',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>
  <div id="curve_chart" style="width: 100%; height: 100%;"></div>