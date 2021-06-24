<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 50px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Overall Result</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Item</a>
                    </div>
                    <?php
                    require_once "config.php";
                    
                    $sql = "SELECT * FROM project_question";
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NO</th>";
                                        echo "<th>Question</th>";
                                        echo "<th>Result</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                
                                $r1= "SELECT (q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 + q10 + q11 + q12 + q13 + q14 + q15 + q16 + q17 + q18) where project_id=2";
                                echo "<tr>";
                                    echo "<td>1</td>";
                                    echo "<td>Project Characteristics</td>";
                                    echo "<td>" $r1 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";
                            
                                $r2= "SELECT (q19 + q20 + q21 + q22 + q23 + q24) where project_id=2";
                                echo "<tr>";
                                    echo "<td>2</td>";
                                    echo "<td>Strategic Management Risks</td>";
                                    echo "<td>" $r2 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                $r3= "SELECT (q25 + q26 + q27 + q28 + q29 + q30 + q31 + q32 + q33) where project_id=2";
                                echo "<tr>";
                                    echo "<td>3</td>";
                                    echo "<td>Procurement Risks</td>";
                                    echo "<td>" $r3 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";
                                
                                $r4= "SELECT (q34 + q35 + q36 + q37 + q38) where project_id=2";
                                echo "<tr>";
                                    echo "<td>4</td>";
                                    echo "<td>Human Resource Risks</td>";
                                    echo "<td>" $r4 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                $r5= "SELECT (q38 + q40 + q41 + q42 + q43) where project_id=2";
                                echo "<tr>";
                                    echo "<td>5</td>";
                                    echo "<td>Business Risks</td>";
                                    echo "<td>" $r5 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                $r6= "SELECT (q44 + q45 + q46 + q47 + q48 + q49) where project_id=2";
                                echo "<tr>";
                                    echo "<td>6</td>";
                                    echo "<td>Project Management Integration Risks</td>";
                                    echo "<td>" $r6 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                $r7= "SELECT (q50 + q51 + q52 + q53 + q54 + q55 + q56 + q57 + q58 + q59 + q60 + q61 + q62 + q63 + q64) where project_id=2";
                                echo "<tr>";
                                    echo "<td>7</td>";
                                    echo "<td>Project Requirements Risks</td>";
                                    echo "<td>" $r7 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td></td>";
                                    echo "<td>Total</td>";
                                    echo "<td>" $r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 "</td>";
                                    echo "<td>";
                                    echo "</td>";
                                echo "</tr>";

                                echo "</tbody>";                            
                            echo "</table>";
                            unset($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    unset($pdo);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>