<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Clube');
        data.addColumn('number', 'Pontuação');
        data.addRows([
          ["Palmeiras",  70],
          ["Internacional",  65],
          ["Flamengo", 63],
          ["Grêmio",  59],
          ["São Paulo", 59],
          ["Atlético-MG", 50],
          ["Cruzeiro", 49],
          ["Atlético-PR", 47],
          ["Santos", 46],
          ["Bahia", 44],
          ["Botafogo", 44],
          ["Fluminense", 41],
          ["Corinthians", 40],
          ["Vasco", 39],
          ["Sport", 38],
          ["Ceará", 38],
          ["Chapecoense", 37],
          ["Vitória", 36],
          ["América-MG", 34],
          ["Paraná", 21]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true});
      }
    </script>
    <div id="table_div" class="center"></div>