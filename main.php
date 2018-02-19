<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <style>
        div.container2{
            
        }
        h4{
            font-size: 0pt
        }
                p{
            font-size: 10pt
        }
</style>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
</script>


<body>

<?php
 $page = $_SERVER['PHP_SELF'];
 $sec = "60";
 header("Refresh: $sec; url=$page");

    date_default_timezone_set('America/Toronto');


$str = file_get_contents('https://myttc.ca/eglinton_station.json');
$json = json_decode($str, true);
$StationName = $json['stops'][0]['name'];
$TransitAgency = $json['stops'][0]['agency'];

$BusOne = $json['stops'][0]['routes'][0]['name'];
$BusOneBasic = $json['stops'][0]['routes'][0]['stop_times'][0]['departure_time'];
$BusOneBasicName = $json['stops'][0]['routes'][0]['stop_times'][0]['shape'];
$BusOneExtra1 = $json['stops'][0]['routes'][0]['stop_times'][1]['shape'];
$BusOneExtra1Time = $json['stops'][0]['routes'][0]['stop_times'][1]['departure_time'];
$BusOneExtra2 = $json['stops'][0]['routes'][0]['stop_times'][2]['shape'];
$BusOneExtra2Time = $json['stops'][0]['routes'][0]['stop_times'][2]['departure_time'];
$BusOneExtra3 = $json['stops'][0]['routes'][0]['stop_times'][3]['shape'];
$BusOneExtra3Time = $json['stops'][0]['routes'][0]['stop_times'][3]['departure_time'];


$BusTwo = $json['stops'][0]['routes'][1]['name'];
$BusTwoBasic = $json['stops'][0]['routes'][1]['stop_times'][0]['departure_time'];
$BusTwoExtra1 = $json['stops'][0]['routes'][1]['stop_times'][1]['shape'];
$BusTwoExtra1Time = $json['stops'][0]['routes'][1]['stop_times'][1]['departure_time'];
$BusTwoExtra2 = $json['stops'][0]['routes'][1]['stop_times'][2]['shape'];
$BusTwoExtra2Time = $json['stops'][0]['routes'][1]['stop_times'][2]['departure_time'];
$BusTwoExtra3 = $json['stops'][0]['routes'][1]['stop_times'][3]['shape'];
$BusTwoExtra3Time = $json['stops'][0]['routes'][1]['stop_times'][3]['departure_time'];


$BusThree = $json['stops'][0]['routes'][2]['name'];
$BusThreeBasic = $json['stops'][0]['routes'][2]['stop_times'][0]['departure_time'];
$BusThreeExtra1 = $json['stops'][0]['routes'][2]['stop_times'][1]['shape'];
$BusThreeExtra1Time = $json['stops'][0]['routes'][2]['stop_times'][1]['departure_time'];
$BusThreeExtra2 = $json['stops'][0]['routes'][2]['stop_times'][2]['shape'];
$BusThreeExtra2Time = $json['stops'][0]['routes'][2]['stop_times'][2]['departure_time'];
$BusThreeExtra3 = $json['stops'][0]['routes'][2]['stop_times'][3]['shape'];
$BusThreeExtra3Time = $json['stops'][0]['routes'][2]['stop_times'][3]['departure_time'];

$BusFour = $json['stops'][0]['routes'][3]['name'];
$BusFourBasic = $json['stops'][0]['routes'][3]['stop_times'][0]['departure_time'];
$BusFourExtra1 = $json['stops'][0]['routes'][3]['stop_times'][1]['shape'];
$BusFourExtra1Time = $json['stops'][0]['routes'][3]['stop_times'][1]['departure_time'];
$BusFourExtra2 = $json['stops'][0]['routes'][3]['stop_times'][2]['shape'];
$BusFourExtra2Time = $json['stops'][0]['routes'][3]['stop_times'][2]['departure_time'];
$BusFourExtra3 = $json['stops'][0]['routes'][3]['stop_times'][3]['shape'];
$BusFourExtra3Time = $json['stops'][0]['routes'][3]['stop_times'][3]['departure_time'];

$BusFive = $json['stops'][0]['routes'][4]['name'];
$BusFiveBasic = $json['stops'][0]['routes'][4]['stop_times'][0]['departure_time'];
$BusFiveExtra1 = $json['stops'][0]['routes'][4]['stop_times'][1]['shape'];
$BusFiveExtra1Time = $json['stops'][0]['routes'][4]['stop_times'][1]['departure_time'];
$BusFiveExtra2 = $json['stops'][0]['routes'][4]['stop_times'][2]['shape'];
$BusFiveExtra2Time = $json['stops'][0]['routes'][4]['stop_times'][2]['departure_time'];
$BusFiveExtra3 = $json['stops'][0]['routes'][4]['stop_times'][3]['shape'];
$BusFiveExtra3Time = $json['stops'][0]['routes'][4]['stop_times'][3]['departure_time'];

$BusSix = $json['stops'][0]['routes'][5]['name'];
$BusSixBasic = $json['stops'][0]['routes'][5]['stop_times'][0]['departure_time'];
$BusSixExtra1 = $json['stops'][0]['routes'][5]['stop_times'][1]['shape'];
$BusSixExtra1Time = $json['stops'][0]['routes'][5]['stop_times'][1]['departure_time'];
$BusSixExtra2 = $json['stops'][0]['routes'][5]['stop_times'][2]['shape'];
$BusSixExtra2Time = $json['stops'][0]['routes'][5]['stop_times'][2]['departure_time'];
$BusSixExtra3 = $json['stops'][0]['routes'][5]['stop_times'][3]['shape'];
$BusSixExtra3Time = $json['stops'][0]['routes'][5]['stop_times'][3]['departure_time'];

$BusSeven = $json['stops'][0]['routes'][6]['name'];
$BusSevenBasic = $json['stops'][0]['routes'][6]['stop_times'][0]['departure_time'];
$BusSevenExtra1 = $json['stops'][0]['routes'][6]['stop_times'][1]['shape'];
$BusSevenExtra1Time = $json['stops'][0]['routes'][6]['stop_times'][1]['departure_time'];
$BusSevenExtra2 = $json['stops'][0]['routes'][6]['stop_times'][2]['shape'];
$BusSevenExtra2Time = $json['stops'][0]['routes'][6]['stop_times'][2]['departure_time'];
$BusSevenExtra3 = $json['stops'][0]['routes'][6]['stop_times'][3]['shape'];
$BusSevenExtra3Time = $json['stops'][0]['routes'][6]['stop_times'][3]['departure_time'];

$BusEight = $json['stops'][0]['routes'][7]['name'];
$BusEightBasic = $json['stops'][0]['routes'][7]['stop_times'][0]['departure_time'];
$BusEightExtra1 = $json['stops'][0]['routes'][7]['stop_times'][1]['shape'];
$BusEightExtra1Time = $json['stops'][0]['routes'][7]['stop_times'][1]['departure_time'];
$BusEightExtra2 = $json['stops'][0]['routes'][7]['stop_times'][2]['shape'];
$BusEightExtra2Time = $json['stops'][0]['routes'][7]['stop_times'][2]['departure_time'];
$BusEightExtra3 = $json['stops'][0]['routes'][7]['stop_times'][3]['shape'];
$BusEightExtra3Time = $json['stops'][0]['routes'][7]['stop_times'][3]['departure_time'];

$BusNine = $json['stops'][0]['routes'][8]['name'];
$BusNineBasic = $json['stops'][0]['routes'][8]['stop_times'][0]['departure_time'];
$BusNineExtra1 = $json['stops'][0]['routes'][8]['stop_times'][1]['shape'];
$BusNineExtra1Time = $json['stops'][0]['routes'][8]['stop_times'][1]['departure_time'];
$BusNineExtra2 = $json['stops'][0]['routes'][8]['stop_times'][2]['shape'];
$BusNineExtra2Time = $json['stops'][0]['routes'][8]['stop_times'][2]['departure_time'];
$BusNineExtra3 = $json['stops'][0]['routes'][8]['stop_times'][3]['shape'];
$BusNineExtra3Time = $json['stops'][0]['routes'][8]['stop_times'][3]['departure_time'];

?>
<title><?php echo $StationName ?></title>
    
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"><?php echo $StationName ?></th>
    <th scope="col">Current Time: <?php echo(strftime("%I:%M %p")); ?></th>
    <th scope="col"><?php echo $TransitAgency ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusOne?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusOneBasic?></b></td>
        <td><?php echo $BusOneExtra1?>: <?php echo $BusOneExtra1Time?> <br>
        <?php echo $BusOneExtra2?>: <?php echo $BusOneExtra2Time?><br>
        <?php echo $BusOneExtra3?>: <?php echo $BusOneExtra3Time?>
        
        
        </td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusTwo?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusTwoBasic?></b></td>
        <td><?php echo $BusTwoExtra1?>: <?php echo $BusTwoExtra1Time?> <br>
        <?php echo $BusTwoExtra2?>: <?php echo $BusTwoExtra2Time?><br>
            <?php echo $BusTwoExtra3?>: <?php echo $BusTwoExtra3Time?> </td>
    </tr>
    <tr>
      <th scope="row"style="background-color:#F44336"><?php echo $BusThree?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusThreeBasic?></b></td>
        <td><?php echo $BusThreeExtra1?>: <?php echo $BusThreeExtra1Time?> <br>
        <?php echo $BusThreeExtra2?>: <?php echo $BusThreeExtra2Time?><br>
            <?php echo $BusThreeExtra3?>: <?php echo $BusThreeExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusFour?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusFourBasic?></b></td>
        <td><?php echo $BusFourExtra1?>: <?php echo $BusFourExtra1Time?> <br>
        <?php echo $BusFourExtra2?>: <?php echo $BusFourExtra2Time?><br>
            <?php echo $BusFourExtra3?>: <?php echo $BusFourExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusFive?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusFiveBasic?></b></td>
        <td><?php echo $BusFiveExtra1?>: <?php echo $BusFiveExtra1Time?> <br>
        <?php echo $BusFiveExtra2?>: <?php echo $BusFiveExtra2Time?><br>
            <?php echo $BusFiveExtra3?>: <?php echo $BusFiveExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusSix?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusFiveBasic?></b></td>
        <td><?php echo $BusSixExtra1?>: <?php echo $BusSixExtra1Time?> <br>
        <?php echo $BusSixExtra2?>: <?php echo $BusSixExtra2Time?><br>
            <?php echo $BusSixExtra3?>: <?php echo $BusSixExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusSeven?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusSevenBasic?></b></td>
        <td><?php echo $BusSevenExtra1?>: <?php echo $BusSevenExtra1Time?> <br>
        <?php echo $BusSevenExtra2?>: <?php echo $BusSevenExtra2Time?><br>
            <?php echo $BusSevenExtra3?>: <?php echo $BusSevenExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusEight?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusEightBasic?></b></td>
        <td><?php echo $BusEightExtra1?>: <?php echo $BusEightExtra1Time?> <br>
        <?php echo $BusEightExtra2?>: <?php echo $BusEightExtra2Time?><br>
            <?php echo $BusEightExtra3?>: <?php echo $BusEightExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#F44336"><?php echo $BusNine?></th>
        <td scope="row"><b>Next Bus: <?php echo $BusNineBasic?></b></td>
        <td><?php echo $BusNineExtra1?>: <?php echo $BusNineExtra1Time?> <br>
        <?php echo $BusNineExtra2?>: <?php echo $BusNineExtra2Time?><br>
            <?php echo $BusNineExtra3?>: <?php echo $BusNineExtra3Time?> </td>
    </tr>
          <tr>
      <th scope="row" style="background-color:#FF9800">Service Alerts:</th>
        <td scope="row"><b>Follow The TTC On Twitter!</b></td>
        <td><script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.ttc.ca%2FRSS%2FService_Alerts%2Findex.rss&showtitle=false&type=js"></script>
 </td>
    </tr>

  </tbody>
</table>

</body>
</html>
