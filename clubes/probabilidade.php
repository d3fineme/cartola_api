<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawStacked);

  function drawStacked() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Clube');
        data.addColumn('number', 'Mandante');
        data.addColumn('number', 'Visitante');
        data.addColumn('number', 'Empate');

        data.addRows([
          ["Palmeiras x Paraná",90, 5, 5],
          ["Internacional x América-MG",75,10,15],
          ["Flamengo x Vitória",90,5,5],
          ["Gêmio x Chapecoense",75,10,15],
          ["São Paulo x Ceará",90,5,5],
          ["Atlético-MG x Sport",75,10,15],
          ["Cruzeiro x Vasco",90,5,5],
          ["Atlético-PR x Corinthians",75,10,15],
          ["Santos x Fluminense",90,5,5],
          ["Bahia x Botafogo",75,10,15]
        ]);

        var options = {
          title: 'Probabilidade de resultado (%)',
          isStacked: true,
          hAxis: {
            title: 'Clube',
            format: 'h:mm a',
            
          },
          vAxis: {
            title: ''
          }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('probabilidade'));
        chart.draw(data, options);
      }
</script>
<div id="probabilidade"style="width: 100%; height: 100%;"></div>
