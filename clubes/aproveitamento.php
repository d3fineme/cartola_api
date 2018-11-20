<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Clube', 'Vitória', 'Derrota', 'Empate'],
          ["Pal",10, 13, 15],
          ["Int",10, 13, 15],
          ["Fla",10, 13, 15],
          ["Grê",10, 13, 15],
          ["Sao",10, 13, 15],
          ["Cam",10, 13, 15],
          ["Cru",10, 13, 15],
          ["Cap",10, 13, 15],
          ["San",10, 13, 15],
          ["Bah",10, 13, 15],
          ["Bot",10, 13, 15],
          ["Flu",10, 13, 15],
          ["Cor",10, 13, 15],
          ["Vas",10, 13, 15],
          ["Spo",10, 13, 15],
          ["Cea",10, 13, 15],
          ["Cha",10, 13, 15],
          ["Vit",10, 13, 15],
          ["Ame",10, 13, 15],
          ["Par",10, 13, 15]
        ]);

        var options = {
          chart: {
            title: 'Aproveitamento',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 100%; height: 100%;"></div>