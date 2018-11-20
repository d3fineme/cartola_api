<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["São Paulo", 8.94, "#b87333"],
        ["Flamengo", 10.49, "silver"],
        ["Grêmio", 19.30, "gold"],
        ["Santos", 21.45, "color: #e5e4e2"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"],
        ["Grêmio", 19.30, "gold"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Pontuação do clube na rodada x",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 100%; height: 100%;"></div>