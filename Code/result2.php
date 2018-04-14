<!DOCTYPE html>
<html lang="en" class="animated fadeIn">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="form.css" />
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</head>
<body>

<!-- Header Begin -->

<div id="resultHead">
    <div class="container">
         <!--LOGO STARTS -->
         <div class="row justify-content-start">
                <div class="col-6">
                    <div id="logoResult">
                        <img src="Images/logo.png" id="logoResult1">  
                    </div>
                </div>
                <div class="col-6">
                    <div id="goHome">
                        <a href="home.html"><i class="fa fa-home fa-3x" id="homeIcon"></i></a>
                    </div>
                </div>
        </div>

        <!--LOGO ENDS -->
    </div>
</div>

<div id="header3">
    <div class="container">
        <div class="row justify-content-center">
            <div col="col-10">
                <div id="containPhP" class="box effect8">
                   <!-- PHP STARTS -->
                    <?php

                    require'Require/require.php';

                    $value_1 = $_POST["county"];
                    $value_2 = $_POST["disability"];
                    $value_3 = $_POST["veteran"];
                    $value_4 = $_POST["resources"];


                    echo"<table>";
                    echo"<tr>
                            <th class='bigRow'>Organization</th>
                            <th class='bigRow'>Address</th>
                            <th class='smallRow'>Disability</th>
                            <th class='smallRow'>Veteran</th>
                            <th>Type</th>
                            <th class='smallRow'>County</th>
                        </tr>";

                    if($value_4){
                        if($value_2 == "I choose not to identify" && $value_3 == "I choose not to identify"){
                            foreach ($value_4 as $v){
                                $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
                                FROM shelter s 
                                INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
                                INNER JOIN s_type stt on st.type_id = stt.type_id
                                INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
                                INNER JOIN county c on sc.county_id = c.county_id
                                WHERE county_name = '$value_1'
                                AND type_name = '$v'");
                        
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo"<table>";
                                    //print_r($row);
                                    echo"<tr>
                                            <td class='bigRow'>{$row['shelter_name']}</td>
                                            <td class='bigRow'>{$row['shelter_address']}</td>
                                            <td class='smallRow'>{$row['disability']}</td>
                                            <td class='smallRow'>{$row['veteran']}</td>
                                            <td>{$row['type_name']}</td>
                                            <td class='smallRow'>{$row['county_name']}</td></tr>";
                                    //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                                    echo"</table>";
                                }
                            }
                        } elseif ($value_2 == "I choose not to identify"){
                            foreach ($value_4 as $v){
                                $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
                                FROM shelter s 
                                INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
                                INNER JOIN s_type stt on st.type_id = stt.type_id
                                INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
                                INNER JOIN county c on sc.county_id = c.county_id
                                WHERE county_name = '$value_1'
                                AND veteran = '$value_3'
                                AND type_name = '$v'");
                        
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo"<table>";
                                    //print_r($row);
                                    echo"<tr>
                                            <td class='bigRow'>{$row['shelter_name']}</td>
                                            <td class='bigRow'>{$row['shelter_address']}</td>
                                            <td class='smallRow'>{$row['disability']}</td>
                                            <td class='smallRow'>{$row['veteran']}</td>
                                            <td>{$row['type_name']}</td>
                                            <td class='smallRow'>{$row['county_name']}</td>
                                        </tr>";
                                    //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                                    echo"</table>";
                                }
                        
                            }
                        } elseif($value_3 == "I choose not to identify"){
                            foreach ($value_4 as $v){
                                $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
                                FROM shelter s 
                                INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
                                INNER JOIN s_type stt on st.type_id = stt.type_id
                                INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
                                INNER JOIN county c on sc.county_id = c.county_id
                                WHERE county_name = '$value_1'
                                AND disability = '$value_2'
                                AND type_name = '$v'");
                        
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo"<table>";
                                    //print_r($row);
                                    echo"<tr>
                                            <td class='bigRow'>{$row['shelter_name']}</td>
                                            <td class='bigRow'>{$row['shelter_address']}</td>
                                            <td class='smallRow'>{$row['disability']}</td>
                                            <td class='smallRow'>{$row['veteran']}</td>
                                            <td>{$row['type_name']}</td>
                                            <td class='smallRow'>{$row['county_name']}</td>
                                        </tr>";
                                    //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                                    echo"</table>";
                                }
                        
                            }
                        } else {
                            foreach ($value_4 as $v){
                                $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
                                FROM shelter s 
                                INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
                                INNER JOIN s_type stt on st.type_id = stt.type_id
                                INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
                                INNER JOIN county c on sc.county_id = c.county_id
                                WHERE county_name = '$value_1'
                                AND disability = '$value_2'
                                AND veteran = '$value_3'
                                AND type_name = '$v'");
                        
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo"<table>";
                                    //print_r($row);
                                    echo"<tr>
                                            <td class='bigRow'>{$row['shelter_name']}</td>
                                            <td class='bigRow'>{$row['shelter_address']}</td>
                                            <td class='smallRow'>{$row['disability']}</td>
                                            <td class='smallRow'>{$row['veteran']}</td>
                                            <td>{$row['type_name']}</td>
                                            <td class='smallRow'>{$row['county_name']}</td>
                                        </tr>";
                                    //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                                    echo"</table>";
                                }
                            }
                        }
                    }

                    ?>
                    <!-- PHP ENDS --> 
                 </div>   
            </div>
        </div>
    </div>
</div>

</body>
</html>


