<?php  
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $sql = "SELECT Service, count(*) as number FROM enquiry GROUP BY Service";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order Service Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawAxisTickColors);

function drawAxisTickColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');
      data.addColumn('number', 'Cats');  
      data.addRows(
        <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Service"]."', ".$row["number"]."],";  
                          }  
                          ?> 
      );
           

      var options = {
        hAxis: {
          title: 'Time',
          textStyle: {
            color: '#01579b',
            fontSize: 20,
            fontName: 'Arial',
            bold: true,
            italic: true
          },
          titleTextStyle: {
            color: '#01579b',
            fontSize: 16,
            fontName: 'Arial',
            bold: false,
            italic: true
          }
        },
        vAxis: {
          title: 'Popularity',
          textStyle: {
            color: '#1a237e',
            fontSize: 24,
            bold: true
          },
          titleTextStyle: {
            color: '#1a237e',
            fontSize: 24,
            bold: true
          }
        },
        colors: ['#a52714', '#097138']
      };
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div>
      

      </body>  
 </html>  