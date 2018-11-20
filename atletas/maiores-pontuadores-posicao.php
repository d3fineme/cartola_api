<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', 'Pontuação'],
        ['Sidão', 23],
        ['Reinaldo', 19],
        ['Arboleda', 15],
        ['Nene', 12],
        ['Everton', 20]
      ]);

      var options = {
        title: 'Maiores pontuadores da última rodada por posição (GOL/LAT/ZAG/MEI/ATA/TEC)',
        chartArea: {width: '50%'}
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>
<div id="chart_div" style="height: 100%;"></div>