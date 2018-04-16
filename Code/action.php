<?php include("Require/header.php");?>
<?php require_once("Require/db_connection.php");?>
                   <!-- PHP STARTS -->
                    <?php
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
                                $result = mysqli_query($connection, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
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
                                $result = mysqli_query($connection, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
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
                                $result = mysqli_query($connection, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
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
                                $result = mysqli_query($connection, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
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
