<?php

require_once "config.php";
session_start();

$q1=$q2=$q3=$q4=$q5=$q6=$q7=$q8=$q9=$q10=$q11=$q12=$q13=$q14=$q15=$q16=$q17=$q18=$q19=$q20=$q21=$q22=$q23=$q24=$q25=$q26=$q27=$q28=$q29=$q30=$q31=$q32=$q33=$q34=$q35=$q36=$q37=$q38=$q39=$q40=$q41=$q42=$q43=$q44=$q45=$q46=$q47=$q48=$q49=$q50=$q51=$q52=$q53=$q54=$q55=$q56=$q57=$q58=$q59=$q60=$q61=$q62=$q63=$q64="";
$q1_err=$q2_err=$q3_err=$q4_err=$q5_err=$q6_err=$q7_err=$q8_err=$q9_err=$q10_err=$q11_err=$q12_err=$q13_err=$q14_err=$q15_err=$q16_err=$q17_err=$q18_err=$q19_err=$q20_err=$q21_err=$q22_err=$q23_err=$q24_err=$q25_err=$q26_err=$q27_err=$q28_err=$q29_err=$q30_err=$q31_err=$q32_err=$q33_err=$q34_err=$q35_err=$q36_err=$q37_err=$q38_err=$q39_err=$q40_err=$q41_err=$q42_err=$q43_err=$q44_err=$q45_err=$q46_err=$q47_err=$q48_err=$q49_err=$q50_err=$q51_err=$q52_err=$q53_err=$q54_err=$q55_err=$q56_err=$q57_err=$q58_err=$q59_err=$q60_err=$q61_err=$q62_err=$q63_err=$q64_err="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $q1 =$_POST["q1"] ?? "";
    $q2 =$_POST["q2"] ?? "";
    $q3 =$_POST["q3"] ?? "";
    $q4 =$_POST["q4"] ?? "";
    $q5 =$_POST["q5"] ?? "";
    $q6 =$_POST["q6"] ?? "";
    $q7 =$_POST["q7"] ?? "";
    $q8 =$_POST["q8"] ?? "";
    $q9 =$_POST["q9"] ?? "";
    $q10 =$_POST["q10"] ?? "";
    $q11 =$_POST["q11"] ?? "";
    $q12 =$_POST["q12"] ?? "";
    $q13 =$_POST["q13"] ?? "";
    $q14 =$_POST["q14"] ?? "";
    $q15 =$_POST["q15"] ?? "";
    $q16 =$_POST["q16"] ?? "";
    $q17 =$_POST["q17"] ?? "";
    $q18 =$_POST["q18"] ?? "";
    $q19 =$_POST["q19"] ?? "";
    $q20 =$_POST["q20"] ?? "";
    $q21 =$_POST["q21"] ?? "";
    $q22 =$_POST["q22"] ?? "";
    $q23 =$_POST["q23"] ?? "";
    $q24 =$_POST["q24"] ?? "";
    $q25 =$_POST["q25"] ?? "";
    $q26 =$_POST["q26"] ?? "";
    $q27 =$_POST["q27"] ?? "";
    $q28 =$_POST["q28"] ?? "";
    $q29 =$_POST["q29"] ?? "";
    $q30 =$_POST["q30"] ?? "";
    $q31 =$_POST["q31"] ?? "";
    $q32 =$_POST["q32"] ?? "";
    $q33 =$_POST["q33"] ?? "";
    $q34 =$_POST["q34"] ?? "";
    $q35 =$_POST["q35"] ?? "";
    $q36 =$_POST["q36"] ?? "";
    $q37 =$_POST["q37"] ?? "";
    $q38 =$_POST["q38"] ?? "";
    $q39 =$_POST["q39"] ?? "";
    $q40 =$_POST["q40"] ?? "";
    $q41 =$_POST["q41"] ?? "";
    $q42 =$_POST["q42"] ?? "";
    $q43 =$_POST["q43"] ?? "";
    $q44 =$_POST["q44"] ?? "";
    $q45 =$_POST["q45"] ?? "";
    $q46 =$_POST["q46"] ?? "";
    $q47 =$_POST["q47"] ?? "";
    $q48 =$_POST["q48"] ?? "";
    $q49 =$_POST["q49"] ?? "";
    $q50 =$_POST["q50"] ?? "";
    $q51 =$_POST["q51"] ?? "";
    $q52 =$_POST["q52"] ?? "";
    $q53 =$_POST["q53"] ?? "";
    $q54 =$_POST["q54"] ?? "";
    $q55 =$_POST["q55"] ?? "";
    $q56 =$_POST["q56"] ?? "";
    $q57 =$_POST["q57"] ?? "";
    $q58 =$_POST["q58"] ?? "";
    $q59 =$_POST["q59"] ?? "";
    $q60 =$_POST["q60"] ?? "";
    $q61 =$_POST["q61"] ?? "";
    $q62 =$_POST["q62"] ?? "";
    $q63 =$_POST["q63"] ?? "";
    $q64 =$_POST["q64"] ?? "";
    
    if(!empty($q1) && !empty($q2) && !empty($q3) && !empty($q4) && !empty($q5) && !empty($q6) && !empty($q7) && !empty($q8) && !empty($q9) && !empty($q10) && !empty($q11) && !empty($q12) && !empty($q13) && !empty($q14) && !empty($q15) && !empty($q16) && !empty($q17) && !empty($q18) && !empty($q19) && !empty($q20) && !empty($q21) && !empty($q22) && !empty($q23) && !empty($q24) && !empty($q5) && !empty($q26) && !empty($q27) && !empty($q28) && !empty($q29) && !empty($q30) && !empty($q31) && !empty($q32) && !empty($q33) && !empty($q34) && !empty($q35) && !empty($q36) && !empty($q37) && !empty($q38) && !empty($q39) && !empty($q40) && !empty($q41) && !empty($q42) && !empty($q43) && !empty($q44) && !empty($q45) && !empty($q46) && !empty($q47) && !empty($q48) && !empty($q49) && !empty($q50) && !empty($q51) && !empty($q52) && !empty($q53) && !empty($q54) && !empty($q55) && !empty($q56) && !empty($q57) && !empty($q58) && !empty($q59) && !empty($q60) && !empty($q61) && !empty($q62) && !empty($q63) && !empty($q64)){
        //Prepare an insert statement
        $sql = "INSERT INTO project_question (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,q26,q27,q28,q29,q30,q31,q32,q33,q34,q35,q36,q37,q38,q39,q40,q41,q42,q43,q44,q45,q46,q47,q48,q49,q50,,q51,q52,q53,q54,q55,q56,q57,q58,q59,q60,,q61,q62,q63,q64) VALUES (:q1,:q2,:q3,:q4,:q5,:q6,:q7,:q8,:q9,:q10,:q11,:q12,:q13,:q14,:q15,:q16,:q17,:q18,;q19,:q20,:q21,:q22,:q23,:q24,:q25,:q26,:q27,:q28,:q29,:q30,:q31,:q32,;q33,:q34,:q35,:q36,:q37,:q38,:q39,:q40,:q41,:q42,:q43,:q44,:q45,:q46,:q47,:q48,:q49,:q50,:q51,:q52,:q53,:q54,:q55,:q56,:q57,:q58,:q59,:q60,:q61,:q62,:q63,:q64)";

        if($stmt = $pdo->prepare($sql)){
            //Bind variables to the prepared statement as parameters
            $stmt->bindParam(":q1", $param_q1);
            $stmt->bindParam(":q2", $param_q2);
            $stmt->bindParam(":q3", $param_q3);
            $stmt->bindParam(":q4", $param_q4);
            $stmt->bindParam(":q5", $param_q5);
            $stmt->bindParam(":q6", $param_q6);
            $stmt->bindParam(":q7", $param_q7);
            $stmt->bindParam(":q8", $param_q8);
            $stmt->bindParam(":q9", $param_q9);
            $stmt->bindParam(":q10", $param_q10);
            $stmt->bindParam(":q11", $param_q11);
            $stmt->bindParam(":q12", $param_q12);
            $stmt->bindParam(":q13", $param_q13);
            $stmt->bindParam(":q14", $param_q14);
            $stmt->bindParam(":q15", $param_q15);
            $stmt->bindParam(":q16", $param_q16);
            $stmt->bindParam(":q17", $param_q17);
            $stmt->bindParam(":q18", $param_q18);
            $stmt->bindParam(":q19", $param_q19);
            $stmt->bindParam(":q20", $param_q20);
            $stmt->bindParam(":q21", $param_q21);
            $stmt->bindParam(":q22", $param_q22);
            $stmt->bindParam(":q23", $param_q23);
            $stmt->bindParam(":q24", $param_q24);
            $stmt->bindParam(":q25", $param_q25);
            $stmt->bindParam(":q26", $param_q26);
            $stmt->bindParam(":q27", $param_q27);
            $stmt->bindParam(":q28", $param_q28);
            $stmt->bindParam(":q29", $param_q29);
            $stmt->bindParam(":q30", $param_q30);
            $stmt->bindParam(":q31", $param_q31);
            $stmt->bindParam(":q32", $param_q32);
            $stmt->bindParam(":q33", $param_q33);
            $stmt->bindParam(":q34", $param_q34);
            $stmt->bindParam(":q35", $param_q35);
            $stmt->bindParam(":q36", $param_q36);
            $stmt->bindParam(":q37", $param_q37);
            $stmt->bindParam(":q38", $param_q38);
            $stmt->bindParam(":q39", $param_q39);
            $stmt->bindParam(":q40", $param_q40);
            $stmt->bindParam(":q41", $param_q41);
            $stmt->bindParam(":q42", $param_q42);
            $stmt->bindParam(":q43", $param_q43);
            $stmt->bindParam(":q44", $param_q44);
            $stmt->bindParam(":q45", $param_q45);
            $stmt->bindParam(":q46", $param_q46);
            $stmt->bindParam(":q47", $param_q47);
            $stmt->bindParam(":q48", $param_q48);
            $stmt->bindParam(":q49", $param_q49);
            $stmt->bindParam(":q50", $param_q50);
            $stmt->bindParam(":q51", $param_q51);
            $stmt->bindParam(":q52", $param_q52);
            $stmt->bindParam(":q53", $param_q53);
            $stmt->bindParam(":q54", $param_q54);
            $stmt->bindParam(":q55", $param_q55);
            $stmt->bindParam(":q56", $param_q56);
            $stmt->bindParam(":q57", $param_q57);
            $stmt->bindParam(":q58", $param_q58);
            $stmt->bindParam(":q59", $param_q59);
            $stmt->bindParam(":q60", $param_q60);
            $stmt->bindParam(":q61", $param_q61);
            $stmt->bindParam(":q62", $param_q62);
            $stmt->bindParam(":q63", $param_q63);
            $stmt->bindParam(":q64", $param_q64);

            //Set parameters
            $param_q1 = $q1;
            $param_q2 = $q2;
            $param_q3 = $q3;
            $param_q4 = $q4;
            $param_q5 = $q5;
            $param_q6 = $q6;
            $param_q7 = $q7;
            $param_q8 = $q8;
            $param_q9 = $q9;
            $param_q10 = $q10;
            $param_q11 = $q11;
            $param_q12 = $q12;
            $param_q13 = $q13;
            $param_q14 = $q14;
            $param_q15 = $q15;
            $param_q16 = $q16;
            $param_q17 = $q17;
            $param_q18 = $q18;
            $param_q19 = $q19;
            $param_q20 = $q20;
            $param_q21 = $q21;
            $param_q22 = $q22;
            $param_q23 = $q23;
            $param_q24 = $q24;
            $param_q25 = $q25;
            $param_q26 = $q26;
            $param_q27 = $q27;
            $param_q28 = $q28;
            $param_q29 = $q29;
            $param_q30 = $q30;
            $param_q31 = $q31;
            $param_q32 = $q32;
            $param_q33 = $q33;
            $param_q34 = $q34;
            $param_q35 = $q35;
            $param_q36 = $q36;
            $param_q37 = $q37;
            $param_q38 = $q38;
            $param_q39 = $q39;
            $param_q40 = $q40;
            $param_q41 = $q41;
            $param_q42 = $q42;
            $param_q43 = $q43;
            $param_q44 = $q44;
            $param_q45 = $q45;
            $param_q46 = $q46;
            $param_q47 = $q47;
            $param_q48 = $q48;
            $param_q49 = $q49;
            $param_q50 = $q50;
            $param_q51 = $q51;
            $param_q52 = $q52;
            $param_q53 = $q53;
            $param_q54 = $q54;
            $param_q55 = $q55;
            $param_q56 = $q56;
            $param_q57 = $q57;
            $param_q58 = $q58;
            $param_q59 = $q59;
            $param_q60 = $q60;
            $param_q61 = $q61;
            $param_q62 = $q62;
            $param_q63 = $q63;
            $param_q64 = $q64;
            
            //Attempt to execute the prepared statement
            if($stmt->execute()){
                //Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            
        }

        // Close statement
        unset($stmt);
    
    }

    // Close connection
    unset($pdo);
}

?>

<!DOCTYPE html>
<html>
<head>
<style>

h1,h2{
    text-align: center;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
.likert li {
    float: down;
    list-style-type: none;
}

</style>
</head>
<body>

<h1>Project Complexity and Risk Assessment Question</h1>
<br>
<h2>3.1 Project Characteristics (18 Questions) </h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
  <td rowspan="2">Cost</td>
    <td>1. What is the total project cost estimate?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase with the size of the project.</li>
        <li>Complexity normally increases when more money is being managed and the impact of realized risks increases.</li>
        <li>The total project cost estimate is to be either an indicative cost estimate or a substantive cost estimate.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio"  name = "q1" value="1" >1 = $1-5 million</li>
        <li><input type="radio"  name = "q1" value="2" >2 = $5-10 million</li>
        <li><input type="radio"  name = "q1" value="3" >3 = $10-25 million</li>
        <li><input type="radio"  name = "q1" value="4" >4 = $25-100 million</li>
        <li><input type="radio"  name = "q1" value="5" >5 = over $100 million</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>2. What percentage of the total project cost estimate is for procurement?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase with more procurement.</li>
        <li>When more of the project is being procured rather than supplied internally, the initiative is considered more complex.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q2" value="1" >1 = No procurement is required—answer "1" to all questions in the "Procurement risks" section (3.3).</li>
        <li><input type="radio" name = "q2" value="2" >2 = under 25 per cent</li>
        <li><input type="radio" name = "q2" value="3" >3 = 26-50 per cent</li>
        <li><input type="radio" name = "q2" value="4" >4 = 51-75 per cent</li>
        <li><input type="radio" name = "q2" value="5" >5 = over 75 per cent</li>
        </ul>
    </td>  
  </tr>
  <tr>
    <td>Investment portfolio management</td>
    <td>3. Relative to the average project in your organization, which of the following adjectives describes the total project cost estimate?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the size of the total project cost estimate relative to the average cost of the organization's projects is large.</li>
        <li>This comparison can be done by referring to the investment plan and reviewing the overall portfolio of projects. Based on this portfolio of planned projects, the organization may group its projects according to the categories of small, medium and large. Each project can then be referred to within their respective project size category.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q3" value="1" >1 = Small</li>
        <li><input type="radio" name = "q3" value="2" ></li>
        <li><input type="radio" name = "q3" value="3" >3 = Medium</li>
        <li><input type="radio" name = "q3" value="4" ></li>
        <li><input type="radio" name = "q3" value="5" >5 = Large</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td>Human resources</td>
    <td>4. How many people (part-time or full-time on the project, including Government of Canada employees and individual contractors) are required to complete this project at its peak activity?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase as the size of the project increases from a human resources perspective.</li>
        <li>When planning a project, a department may wish to verify that the personnel required are available in sufficient number and with the needed skills. When projecting the number of people required at the peak activity for the project, one should ideally consider the availability of these resources internally and what can be acquired from outside the department, normally contracted personnel.</li>
        <li>Human resources engaged directly by a vendor for any components of the project (e.g. produce a good or service) are not included in this figure. This is captured by question 2.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q4" value="1" >1 = under 10</li>
        <li><input type="radio" name = "q4" value="2" >2 = 10-25</li>
        <li><input type="radio" name = "q4" value="3" >3 = 26-100</li>
        <li><input type="radio" name = "q4" value="4" >4 = 101-250</li>
        <li><input type="radio" name = "q4" value="5" >5 = over 250</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td>Time</td>
    <td>5. From project defintion to project close-out, what is the expected duration of the project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase with the length of the project.</li>
        <li>For example, the longer the project timeframe, the more management resources are required and the greater the likelihood that external factors affecting the project requirements, project objectives, and the project baseline will change.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q5" value="1" >1 = under 12 months</li>
        <li><input type="radio" name = "q5" value="2" >2 = 12-24 months</li>
        <li><input type="radio" name = "q5" value="3" >3 = 24-36 months</li>
        <li><input type="radio" name = "q5" value="4" >4 = 36-48 months</li>
        <li><input type="radio" name = "q5" value="5" >5 = over 48 months</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td>Scope</td>
    <td>6. How many sponsoring or funding departments or agencies are involved?</td>
    <td><ul>
        <li>The inherent level of complexity and risk may increase as the number of sponsoring or funding departments or agencies increase.</li>
        <li>Include only the departments or agencies that will co-sponsor or jointly fund the project, which should involve mutually agreed upon collaboration between Government of Canada organizations, provincial governments or private sector organizations that would include their active participation, direction, and/or funding. The names of collaborating organizations are to be included in the question textbox.</li>
        <li>Common service providers such as Public Works and Government Services Canada (PWGSC), Shared Services Canada, or central agencies should not be included.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q6" value="1" >1 = The project involves only one department or agency.</li>
        <li><input type="radio" name = "q6" value="2" >2 = The project involves another department or agency.</li>
        <li><input type="radio" name = "q6" value="3" >3 = The project involves two other departments or agencies.</li>
        <li><input type="radio" name = "q6" value="4" >4 = The project involves three other departments or agencies.</li>
        <li><input type="radio" name = "q6" value="5" >5 = The project involves at least four other departments or agencies.</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td>Communications</td>
    <td>7. How will the outcome of this project change or directly affect business processes, sectors, branches and other departments and agencies?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase the greater the project reach.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q7" value="1" >1 = The outcome of this project will affect one business process within a sector</li>
        <li><input type="radio" name = "q7" value="2" >2 = The outcome of this project will affect multiple business processes within a sector.</li>
        <li><input type="radio" name = "q7" value="3" >3 = The outcome of this project will affect multiple sectors.</li>
        <li><input type="radio" name = "q7" value="4" >4 = The outcome of this project will affect multiple branches.</li>
        <li><input type="radio" name = "q7" value="5" >5 = The outcome of this project will affect multiple departments or agencies.</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td>Project integration management</td>
    <td>8. The proposed or established project governance structure demonstrates adequate support for how many of the following project factors?
        <ol type ="a">
        <li>appropriate representation of stakeholders and executive management;</li>
        <li>documented decision-making processes;</li>
        <li>documented roles, responsibilities, and authorities within the governance structure; and</li>
        <li>documented information requirements.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the governance structure for the project is not appropriate, clearly established and documented.</li>
        <li>An appropriate representation of stakeholders and executive management is based on the judgement of the organization.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q8" value="1" >1 = Support for all factors is demonstrated.</li>
        <li><input type="radio" name = "q8" value="2" >2 = Support for three of the factors is demonstrated.</li>
        <li><input type="radio" name = "q8" value="3" >3 = Support for two of the factors is demonstrated.</li>
        <li><input type="radio" name = "q8" value="4" >4 = Support for one of the factors is demonstrated.</li>
        <li><input type="radio" name = "q8" value="5" >5 = Support is not demonstrated for any of the factors.</li>
        </ul>
    </td>
  </tr>
  <tr>
  <td rowspan="2">Cost</td>
    <td>9. In supporting the achievement of the expected outcomes, how many of the following criteria apply to the total project cost estimate (either indicative cost estimate or substantive cost estimate)?
        <ol type ="a">
        <li>Cost estimates are generated at the work-package level.</li>
        <li>Cost estimates are based on historical data or industry benchmarks.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if project cost estimates are not well defined.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q9" value="1" >1 = Both criteria are met.</li>
        <li><input type="radio" name = "q9" value="2" ></li>
        <li><input type="radio" name = "q9" value="3" >3 = One of the two criteria is met.</li>
        <li><input type="radio" name = "q9" value="4" ></li>
        <li><input type="radio" name = "q9" value="5" >5 = None of the criteria are met.</li>
        </ul>
    </td>
  </tr>
  <tr>
  
    <td>10. In supporting the achievement of the expected outcomes, how many of the following criteria apply to the costing model?
        <ol type ="a">
        <li>The source of funds has been identified within departmental reference levels.</li>
        <li>The funds have been internally committed.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is no identified source of funds and if the funds have not yet been committed.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q10" value="1" >1 = Both criteria are met.</li>
        <li><input type="radio" name = "q10" value="2" ></li>
        <li><input type="radio" name = "q10" value="3" >3 = One of the two criteria is met.</li>
        <li><input type="radio" name = "q10" value="4" ></li>
        <li><input type="radio" name = "q10" value="5" >5 = None of the criteria are met.</li>
        </ul>
    </td>  
  </tr>
  <tr>
  <td rowspan="8">Time</td>
    <td>11. Is the project susceptible to time delays? Time delays can have a number of causes, such as the following:
        <ol type ="a">
        <li>Changes in technology;</li>
        <li>Requirements of participating organizations;</li>
        <li>Seasonal considerations;</li>
        <li>The need for policy approvals; and</li>
        <li>External influences.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if it is susceptible to factors that can increase the potential for time delays.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q11" value="1" >1 = No, the project is not susceptible.</li>
        <li><input type="radio" name = "q11" value="2" ></li>
        <li><input type="radio" name = "q11" value="3" >3 = Yes, the project is moderately susceptible; time delays will have minor effects on the schedule.</li>
        <li><input type="radio" name = "q11" value="4" ></li>
        <li><input type="radio" name = "q11" value="5" >5 = Yes, the project is highly susceptible; time delays will have major effects on the schedule.</li>
        </ul>
    </td>
  </tr>
  <tr>
  
  <td>12. Do geographical considerations influence the manner in which the project is conducted? Consider the following statements:
      <ol type ="a">
      <li>Project activities or team members are distributed across a wide geographical area.</li>
      <li>The project will be conducted in a remote or difficult location.</li>
      </ol>
      </td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if the project is geographically distributed or is conducted in a challenging location.</li>
      <li>A remote or difficult location may be one that requires extensive travel time, has limited or restricted access, does not have readily available services or may be distant from other locations that may be important to the project.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q12" value="1" >1 = Neither statement applies.</li>
      <li><input type="radio" name = "q12" value="2" ></li>
      <li><input type="radio" name = "q12" value="3" >3 = One statement is true.</li>
      <li><input type="radio" name = "q12" value="4" ></li>
      <li><input type="radio" name = "q12" value="5" >5 = Both statements are true.</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>13. Do environmental considerations influence the manner in which the project is conducted?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there are environmental considerations.</li>
      <li>Environmental considerations may take account of contaminated sites or carbon off-sets, and environmental tools may include environmental impact assessments.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q13" value="1" >1 = No</li>
      <li><input type="radio" name = "q13" value="2" ></li>
      <li><input type="radio" name = "q13" value="3" ></li>
      <li><input type="radio" name = "q13" value="4" ></li>
      <li><input type="radio" name = "q13" value="5" >5 = Yes</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>14. Are there any socio-economic considerations that must be taken into account?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there are environmental considerations.</li>
      <li>Considerations may include industrial regional benefits, Aboriginal people's (First Nations, Inuit, Métis) rights and interests, green procurement, relocation of staff, loss of employment, managing designated heritage assets, etc.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q14" value="1" >1 = No</li>
      <li><input type="radio" name = "q14" value="2" ></li>
      <li><input type="radio" name = "q14" value="3" ></li>
      <li><input type="radio" name = "q14" value="4" ></li>
      <li><input type="radio" name = "q14" value="5" >5 = Yes</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>15. Consider how the availability of facilities will influence the manner in which the project is conducted:</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if facilities for the project team are inadequate.</li>
      <li>Facilities refers to the availability of a space for the project team, such as office complexes, laboratories, convention centres, etc.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q15" value="1" >1 = Appropriate facilities are available to conduct the project.</li>
      <li><input type="radio" name = "q15" value="2" ></li>
      <li><input type="radio" name = "q15" value="3" >3 = Facilities available to the project are inadequate.</li>
      <li><input type="radio" name = "q15" value="4" ></li>
      <li><input type="radio" name = "q15" value="5" >5 = Facilities are unavailable for the project.</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>16. Does public perception influence the manner in which the project is conducted?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if the project is influenced by public opinion.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q16" value="1" >1 = No</li>
      <li><input type="radio" name = "q16" value="2" ></li>
      <li><input type="radio" name = "q16" value="3" ></li>
      <li><input type="radio" name = "q16" value="4" ></li>
      <li><input type="radio" name = "q16" value="5" >5 = Yes</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>17. Do considerations relating to Aboriginal people (including land claims and Aboriginal consultation obligations) influence the manner in which the project is conducted?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase as the rights and interests of Aboriginal people are considered throughout the delivery of the project.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q17" value="1" >1 = No</li>
      <li><input type="radio" name = "q17" value="2" ></li>
      <li><input type="radio" name = "q17" value="3" ></li>
      <li><input type="radio" name = "q17" value="4" ></li>
      <li><input type="radio" name = "q17" value="5" >5 = Yes</li>
      </ul>
  </td>  
  </tr>
  <tr>
  
  <td>18. Do health and safety requirements add significant complexity to the requirements for this project?</td>
  <td><ul>
      <li>18. Do health and safety requirements add significant complexity to the requirements for this project?</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q18" value="1" >1 = No</li>
      <li><input type="radio" name = "q18" value="2" ></li>
      <li><input type="radio" name = "q18" value="3" ></li>
      <li><input type="radio" name = "q18" value="4" ></li>
      <li><input type="radio" name = "q18" value="5" >5 = Yes</li>
      </ul>
  </td>  
  </tr>
</table>
<br>
<h2>3.2 Strategic Management Risks (6 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
    <td>Investment portfolio management</td>
    <td>19. How well and how clearly does the project align with the organization's mandate and strategic outcomes?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project is not closely aligned with the mandate and strategic objectives of the organization.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q19" value="1" >1 = The project is directly aligned and it explicity contributes to the strategic outcomes of the organization or program.</li>
        <li><input type="radio" name = "q19" value="2" ></li>
        <li><input type="radio" name = "q19" value="3" >3 = There is good alignment with the strategic outcome and there is an indirect contribution to the strategic outcomes of the organization or program.</li>
        <li><input type="radio" name = "q19" value="4" ></li>
        <li><input type="radio" name = "q19" value="5" >5 = There is a weak alignment with the strategic outcomes, or the strategic outcomes have not been established.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Investment portfolio management</td>
    <td>20. What level of priority is the project to the organization?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project is of lesser priority to the organization.</li>
        <li>Lower priority projects may be more likely to face resource allocation issues than those that are considered to be critical priorities.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q20" value="1" >1 = The project is a critical priority: all resources necessary will be allocated to it.</li>
        <li><input type="radio" name = "q20" value="2" ></li>
        <li><input type="radio" name = "q20" value="3" ></li>
        <li><input type="radio" name = "q20" value="4" ></li>
        <li><input type="radio" name = "q20" value="5" >5 = The project is a normal priority: resources may be shared with a project of equal or higher priority.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Project integration management</td>
    <td>21. How thoroughly does the project business case demonstrate the value of the project to the organization?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is not a strong business case that links investments with program results and, ultimately, with the strategic outcomes of the organization.</li>
        <li>A business case (when it is required) is defined by the operational requirements of the organization. The requirement for a business case is determined by an organization.</li>
        <li>TBS has developed a business case guide and template.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q21" value="1" >1 = The business case is compelling, and value is extensively documented, OR a business case is not required.</li>
        <li><input type="radio" name = "q21" value="2" ></li>
        <li><input type="radio" name = "q21" value="3" >3 = The business case provides a good demonstration of value; some details require further clarification.</li>
        <li><input type="radio" name = "q21" value="4" ></li>
        <li><input type="radio" name = "q21" value="5" >5 = The business case does not demonstrate value or is not complete.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  <td rowspan="2">Communications</td>
    <td>22. To what degree is the organization's management and relevant stakeholders aware of the project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project has not been clearly communicated to management and if there has been a lack of management engagement.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q22" value="1" >1 = There is consistent, clear, and comprehensive understanding of the project at all relevant levels.</li>
        <li><input type="radio" name = "q22" value="2" ></li>
        <li><input type="radio" name = "q22" value="3" >3 = There is good general awareness of the project, its implications, and its budget.</li>
        <li><input type="radio" name = "q22" value="4" ></li>
        <li><input type="radio" name = "q22" value="5" >5 = There is minimal awareness of the project in relevant levels of the organization.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>23. Does the project have a communications plan?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project does not have a plan to communicate with internal and external stakeholders.</li>
        <li>The requirement for a communications plan is determined by the organization. Guidelines of when a communications plan is required should be defined and documented by the organization.</li>
        <li>The plan for communications can be a standalone document or part of another project document.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q23" value="1" >1 = Yes, there is a project communications plan..</li>
        <li><input type="radio" name = "q23" value="2" ></li>
        <li><input type="radio" name = "q23" value="3" >3 = The project communications plan has not yet been completed.</li>
        <li><input type="radio" name = "q23" value="4" ></li>
        <li><input type="radio" name = "q23" value="5" >5 = No, a project communications plan does not exist.</li>
        </ul>
    </td>  
  </tr>
  <tr>
    <td>Project integration management</td>
    <td>24. How extensive is the commitment of the organization's senior executive management, stakeholders, partners, and project sponsors to the timely and successful completion of this project? Consider the following criteria:
        <ol type ="a">
        <li>A senior project sponsor or management champion is engaged.</li>
        <li>Stakeholders and partners are willing to reallocate resources if necessary.</li>
        <li>Senior executive management oversight is in place.</li>
        <li>Commitment from all stakeholders is confirmed.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project does not have adequate commitment.</li>
        <li>Criteria a, b, and c are indicators of commitment. Criteria d can be documented with the noted participation of stakeholders in key project meetings.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q24" value="1" >1 = All four criteria are met.</li>
        <li><input type="radio" name = "q24" value="2" >2 = Three of the four criteria are met.</li>
        <li><input type="radio" name = "q24" value="3" >3 = Two of the four criteria are met.</li>
        <li><input type="radio" name = "q24" value="4" >4 = One of the four criteria is met.</li>
        <li><input type="radio" name = "q24" value="5" >5 = None of the four criteria are met.</li>
        </ul>
    </td>    
  </tr>
</table>
<br>
<h2>3.3 Procurement Risks (9 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
  <td rowspan="9">Procurement</td>
    <td>25. The documented project procurement strategy:</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if an appropriate procurement strategy is not in place.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q25" value="1" >1 = addresses all project requirements.</li>
        <li><input type="radio" name = "q25" value="2" ></li>
        <li><input type="radio" name = "q25" value="3" >3 = is high-level and adequately describes required procurement activities.</li>
        <li><input type="radio" name = "q25" value="4" ></li>
        <li><input type="radio" name = "q25" value="5" >5 = is incomplete or inappropriate for the project.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>26. What is the supplier availability and willingness?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is only a small pool of qualified suppliers in the market.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q26" value="1" >1 = There are qualified suppliers in the market willing to work with the Government of Canada.</li>
        <li><input type="radio" name = "q26" value="2" ></li>
        <li><input type="radio" name = "q26" value="3" >3 = There is a limited number of qualified suppliers in the market or some suppliers are reluctant to work with the Government of Canada.</li>
        <li><input type="radio" name = "q26" value="4" ></li>
        <li><input type="radio" name = "q26" value="5" >5 = There is only one supplier or there are no qualified suppliers that can meet the requirements.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>27. Will the appropriate products, goods, or services be supplied in a timely manner (according to specified contract delivery dates or required delivery dates) within the expected cost envelope by a qualified supplier?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the supplier's ability to deliver the planned products, goods, or services is constrained.</li>
        <li>Products, goods or services that do not meet requested specifications are to be considered 'inappropriate' and hence rated as a '5'.</li>
        <li>Products, goods or services that cannot be adequately delivered as the supplier is, to some significant degree, unable or unqualified to provide the products, goods or services are also to be rated as a '5'.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q27" value="1" >1 = There is no potential for products, goods, or services not being readily supplied.</li>
        <li><input type="radio" name = "q27" value="2" ></li>
        <li><input type="radio" name = "q27" value="3" >3 = There is a slight potential for slippage of project schedule due to procurement complexity or vendor challenges.</li>
        <li><input type="radio" name = "q27" value="4" ></li>
        <li><input type="radio" name = "q27" value="5" >5 = There is a potential that the project deliverables, schedule, or budget may be seriously affected by limited qualified bidders, significant request-for-proposal process delays, or extended challenges.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>28. How many of the following statements are true?
        <ol type ="a">
        <li>The personnel involved in the project's procurement component have expertise in writing specifications or contracts.</li>
        <li>The personnel involved in the project's procurement component have subject-matter expertise in the goods or services being procured.</li>
        <li>There is a robust review process for contract award.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the supplier's ability to deliver the planned products, goods, or services is constrained.</li>
        <li>Consider all personnel undertaking activities within the scope of the project work.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q28" value="1" >1 = All statements are true.</li>
        <li><input type="radio" name = "q28" value="2" >2 = Two statements are true.</li>
        <li><input type="radio" name = "q28" value="3" ></li>
        <li><input type="radio" name = "q28" value="4" >4 = One statement is true.</li>
        <li><input type="radio" name = "q28" value="5" >5 = None of the statements are true.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>29. How many separate contracts associated with key deliverables are planned for this project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there are several contracts as part of the project.</li>
        <li>Contracts exclude MOUs and partnership agreements between co-sponsors that jointly fund the project.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q29" value="1" >1 = One contract.</li>
        <li><input type="radio" name = "q29" value="2" >2 = Two contracts.</li>
        <li><input type="radio" name = "q29" value="3" >3 = Three contracts.</li>
        <li><input type="radio" name = "q29" value="4" >4 = Four contracts.</li>
        <li><input type="radio" name = "q29" value="5" >5 = Five or more contracts.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>30. How many of the following statements are true?
        <ol type ="a">
        <li>The firm or individual obtaining the contract will subcontract to other companies</li>
        <li>Contracts are subject to trade agreements</li>
        <li>The results of the contract are dependent on the results of another contract.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the contract characteristics are complicated.</li>
        <li>Only count the statement as true if it is true for all contracts related to the project as per Question 29.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q30" value="1" >1 = None of the statements are true.</li>
        <li><input type="radio" name = "q30" value="2" ></li>
        <li><input type="radio" name = "q30" value="3" >3 = One statement is true.</li>
        <li><input type="radio" name = "q30" value="4" >4 = Two statements are true.</li>
        <li><input type="radio" name = "q30" value="5" >5 = All of the statements are true.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>31. Based on the contract, consider the degree of control over supplier selection and anticipated contract style.</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is limited control over the selection of a qualified supplier.</li>
        <li>This question refers to control over the selection of a qualified bidder. Whereas the actual complexities introduced with the method of procurement itself are considered in Question 26.</li>
        <li>If more than one method of supply is involved, select the method with the highest score.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q31" value="1" >1 = directed (sole-source, Advance Contract Award Notice - ACAN).</li>
        <li><input type="radio" name = "q31" value="2" >2 = a standing offer call-up.</li>
        <li><input type="radio" name = "q31" value="3" ></li>
        <li><input type="radio" name = "q31" value="4" >4 = a supply arrangement procurement.</li>
        <li><input type="radio" name = "q31" value="5" >5 = a public tender (request for quotation, invitation to tender, request for proposal).</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>32. How many of the following statements pertaining to contract management are true?
        <ol type ="a">
        <li>The personnel who wrote the contract are involved in the management of the contract.</li>
        <li>There is a standardized acceptance process for the review of the completion of contracts (e.g. peer reviewing or field trials).</li>
        <li>The lines of communication between the contract authority and the contractor are well-defined and regularized.</li>
        <li>There is a standardized process for reporting progress (e.g. punctual evaluation or regular meetings).</li>
        <li>There is a mechanism in place to address any contractual disagreements between parties regarding the completion of a contract.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if effective mechanisms for managing the contracts associated with the project are not in place.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q32" value="1" >1 = All statements are true.</li>
        <li><input type="radio" name = "q32" value="2" >2 = Four statements are true.</li>
        <li><input type="radio" name = "q32" value="3" >3 = Three statements are true.</li>
        <li><input type="radio" name = "q32" value="4" >4 = Two statements are true.</li>
        <li><input type="radio" name = "q32" value="5" >5 = One or none of the statements are true.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>33. Has PWGSC or a delegated contracting authority been formally engaged through a service agreement to provide adequate support for the procurement process?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the delegated contracting authority has not been formally engaged and service expectations defined.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q33" value="1" >1 = Yes, or not required.</li>
        <li><input type="radio" name = "q33" value="2" ></li>
        <li><input type="radio" name = "q33" value="3" >3 = This is planned but not yet in place.</li>
        <li><input type="radio" name = "q33" value="4" ></li>
        <li><input type="radio" name = "q33" value="5" >5 = No.</li>
        </ul>
    </td>    
  </tr>
</table>
<br>
<h2>3.4 Human Resources Risks (5 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
  <td rowspan="5">Human Resources</td>
    <td>34. Does the organization anticipate a shortage of available personnel with appropriate skills during a significant period of the project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is a shortage of appropriate skills.</li>
        <li>Consider the organization's staffing plan to address any skill gaps. If no plan exists then the response should be 'yes'.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q34" value="1" >1 = No</li>
        <li><input type="radio" name = "q34" value="2" ></li>
        <li><input type="radio" name = "q34" value="3" ></li>
        <li><input type="radio" name = "q34" value="4" ></li>
        <li><input type="radio" name = "q34" value="5" >5 = Yes</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>35. What is the predicted stability of the project team? Consider the following criteria:
        <ol type ="a">
        <li>The project team has previously worked together.</li>
        <li>A low rate of turnover is expected.</li>
        <li>It is expected that a suitable replacement will be readily available.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project team is unstable.</li>
        <li>Consider common service providers (PWGSC, SSC) as project team members. Discussions with the specific organization may be necessary before answering this question.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q35" value="1" >1 = All three criteria are met.</li>
        <li><input type="radio" name = "q35" value="2" >2 = Two of the three criteria are met.</li>
        <li><input type="radio" name = "q35" value="3" ></li>
        <li><input type="radio" name = "q35" value="4" >4 = One of the three criteria is met.</li>
        <li><input type="radio" name = "q35" value="5" >5 = None of the three criteria are met.</li>
        </ul>
    </td>    
  </tr>
  <tr>
 
    <td>36. What percentage of the project team is assigned full-time to the project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the commitment of project team members is low.</li>
        <li>Consider common service providers (PWGSC, SSC) as project team members.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q36" value="1" >1 = over 80 per cent</li>
        <li><input type="radio" name = "q36" value="2" >2 = 61-80 per cent</li>
        <li><input type="radio" name = "q36" value="3" >3 = 41-60 per cent</li>
        <li><input type="radio" name = "q36" value="4" >4 = 20-40 per cent</li>
        <li><input type="radio" name = "q36" value="5" >5 = under 20 per cent or all part-time</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
    <td>37. Consider the following criteria regarding knowledge and experience:
        <ol type ="a">
        <li>The project will use a proven approach.</li>
        <li>This type of project has been done before in the Government of Canada.</li>
        <li>The project will use resources that have been applied to this type of project before.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project is untried, unique, and/or leading edge.</li>
        <li>If a third party is delivering the project, then the question is to be answered from their perspective. For example, consider whether the third party will be using a proven approach.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q37" value="1" >1 = All three criteria are met.</li>
        <li><input type="radio" name = "q37" value="2" >2 = Two of the three criteria are met.</li>
        <li><input type="radio" name = "q37" value="3" ></li>
        <li><input type="radio" name = "q37" value="4" >4 = One of the three criteria is met.</li>
        <li><input type="radio" name = "q37" value="5" >5 = None of the three criteria are met.</li>
        </ul>
    </td>    
  </tr>
  <tr>
 
    <td>38. Has the assigned project manager worked on a project of this size and complexity before?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project manager does not have the knowledge and experience to deliver the project.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q38" value="1" >1 = Yes</li>
        <li><input type="radio" name = "q38" value="2" ></li>
        <li><input type="radio" name = "q38" value="3" ></li>
        <li><input type="radio" name = "q38" value="4" ></li>
        <li><input type="radio" name = "q38" value="5" >5 = No</li>
        </ul>
    </td>    
  </tr>
</table>
<br>
<h2>3.5 Business Risks (5 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
  <td rowspan="5">Human resources, Communications</td>
    <td>39. Describe the overall effect of this project on the organization:</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project necessitates change to the current organizational structures.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q39" value="1" >1 = Project will fit with the organization's current processes, use existing workforce and skills, and not require substantial changes to technology and other infrastructure.</li>
        <li><input type="radio" name = "q39" value="2" ></li>
        <li><input type="radio" name = "q39" value="3" >3 = Some changes to processes, staffing models, or technology will be required.</li>
        <li><input type="radio" name = "q39" value="4" ></li>
        <li><input type="radio" name = "q39" value="5" >5 = Significant restructuring of business processes, staffing requirements, partner relationships, and infrastructure will be required.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
  <td>40. Does the project have a change management plan?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there is no change management plan.</li>
      <li>Change management is a structured approach to transitioning individuals, teams, and organizations from a current state to a desired future state. In other words, change management is about helping the people affected by an initiative move to a new situation.</li>
      <li>The requirement for a change management plan is determined by the organization. Guidelines on when a change management plan is required should be defined in writing by the organization.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q40" value="1" >1 = Change management will be required and a change management plan has been prepared. Alternatively, there are no significant change management requirements.</li>
      <li><input type="radio" name = "q40" value="2" ></li>
      <li><input type="radio" name = "q40" value="3" >3 = Change management will be required and preparation of a change management plan is incorporated or included in the project management plan.</li>
      <li><input type="radio" name = "q40" value="4" ></li>
      <li><input type="radio" name = "q40" value="5" >5 = Change management will be required but there are no plans to establish a change management plan.</li>
      </ul>
  </td>    
  </tr>
  <tr>
  
  <td>41. What is the level of public involvement required to achieve expected outcomes?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there is a high degree of public involvement and support required.</li>
      <li>The level of involvement is expressed in the number of people, length of time, or number of groups involved.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q41" value="1" >1 = No public participation is required for project success.</li>
      <li><input type="radio" name = "q41" value="2" >2 = Limited public participation is required for project success.</li>
      <li><input type="radio" name = "q41" value="3" ></li>
      <li><input type="radio" name = "q41" value="4" >4 = Moderate public participation is required for project success.</li>
      <li><input type="radio" name = "q41" value="5" >5 = Extensive public participation is required for project success.</li>
      </ul>
  </td>    
  </tr>
  <tr>
  
  <td>42. What level of legal risk will be introduced by this project through the addition of new liabilities, regulatory requirements, and legislative changes?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there are legislative or regulatory changes needed to complete the project or implemented the project.</li>
      <li>To answer this question find the answer that best represents the situation for the initiative. Not all the conditions in each answer need apply.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q42" value="1" >1 = No legal review is required; no legislative changes are required; legal costs and effort are assessed as low.</li>
      <li><input type="radio" name = "q42" value="2" >2 = One or more risk events will likely occur resulting in legal costs and effort; a legal review has been completed.</li>
      <li><input type="radio" name = "q42" value="3" >3 = One or more risk events will likely occur resulting in legal costs and effort; a legal review has <i>not</i> been completed.</li>
      <li><input type="radio" name = "q42" value="4" >4 = There is a high probability of liability and other legal risks; extensive legal resources will be required during the project; legislative change is required to implement the project; a legal review has been completed.</li>
      <li><input type="radio" name = "q42" value="5" >5 = There is a high probability of liability and other legal risks; extensive legal resources will be required during the project; legislative change is required to implement the project; a legal review has <i>not</i> been completed.</li>
      </ul>
  </td>    
  </tr>
  <tr>
  
  <td>43. Are there expected challenges to ensure that this project complies with relevant Treasury Board policy requirements, such as those regarding security, accessibility, common look and feel standards for the Internet, and management of government information?</td>
  <td><ul>
      <li>The inherent complexity and risk of the project may increase if there are challenges in meeting policy requirements and/or exemptions are required.</li>
      <li>Organizations are to document which policies apply to their project. For instance, if personal information is part of the project then a Privacy Impact Assessment is required and should be noted in the PCRA response.</li>
      </ul>
  </td>
  <td><ul class ="likert">
      <li><input type="radio" name = "q43" value="1" >1 = The project fully complies with all applicable policies. Alternatively, the project is not subject to any of these policies.</li>
      <li><input type="radio" name = "q43" value="2" ></li>
      <li><input type="radio" name = "q43" value="3" >3 = There are some challenges associated with policy requirements, but the project team is adequately equipped to address these.</li>
      <li><input type="radio" name = "q43" value="4" ></li>
      <li><input type="radio" name = "q43" value="5" >5 = There are some challenges associated with policy requirements and there is a lack of confidence that policy requirements can be met on schedule and within the budget.</li>
      </ul>
  </td>    
  </tr>
</table>
<br>
<h2>3.6 Project Management Integration Risks (6 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
    <td>Project integration management</td>
    <td>44. How many of the following elements are defined in the project management plan?
        <ol type ="a">
        <li>scope</li>
        <li>costs</li>
        <li>schedule</li>
        <li>project controls</li>
        <li>risks</li>
        <li>deliverables</li>
        <li>team or skills</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project has not been well-defined.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q44" value="1" >1 = All elements are defined.</li>
        <li><input type="radio" name = "q44" value="2" >2 = Five or six elements are defined.</li>
        <li><input type="radio" name = "q44" value="3" >3 = Three or four elements are defined.</li>
        <li><input type="radio" name = "q44" value="4" >4 = One or two elements are defined.</li>
        <li><input type="radio" name = "q44" value="5" >5 = No plan has been completed.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Human resources, Project integration management</td>
    <td>45. To indicate the extent of the project team's being appropriately organized to undertake a project of this scope, how many of these criteria are met?
        <ol type ="a">
        <li>Project team composition, resource levels, and roles and responsibilities are defined and documented.</li>
        <li>Resources are dedicated (i.e. available when required).</li>
        <li>Responsibilities and required authorities for managers and leads within the project team are defined and documented.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project team is not well organized.</li>
        <li>The extent to which a project team is organized and structured is to be commensurate with the scope of the project.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q45" value="1" >1 = All three criteria are met.</li>
        <li><input type="radio" name = "q45" value="2" >2 = Two of the three criteria are met.</li>
        <li><input type="radio" name = "q45" value="3" ></li>
        <li><input type="radio" name = "q45" value="4" >4 = One of the three criteria is met.</li>
        <li><input type="radio" name = "q45" value="5" >5 = None of the three criteria are met.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Project integration management</td>
    <td>46. Has a project reporting and control process appropriate for the project been documented?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project reporting and control processes have not been documented.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q46" value="1" >1 = Yes</li>
        <li><input type="radio" name = "q46" value="2" ></li>
        <li><input type="radio" name = "q46" value="3" >3 = The development of a project reporting and control process is a planned activity, but not yet completed.</li>
        <li><input type="radio" name = "q46" value="4" ></li>
        <li><input type="radio" name = "q46" value="5" >5 = No</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Project integration management, Quality risk</td>
    <td>47. How many of the following disciplines will, or does the project employ?
        <ol type ="a">
        <li>quality assurance</li>
        <li>risk management</li>
        <li>outcome management</li>
        <li>issue management</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if best practices are not followed.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q47" value="1" >1 = All four disciplines.</li>
        <li><input type="radio" name = "q47" value="2" >2 = Three of the disciplines.</li>
        <li><input type="radio" name = "q47" value="3" >3 = Two of the disciplines.</li>
        <li><input type="radio" name = "q47" value="4" >4 = One of the disciplines.</li>
        <li><input type="radio" name = "q47" value="5" >5 = None of the disciplines.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Risk</td>
    <td>48. Has a risk management plan been completed, and to what degree have appropriate contingency plans been included which respond to the risks as identified in the plan?
    Consider the following criteria:
        <ol type ="a">
        <li>Identified risks have been assessed and prioritized.</li>
        <li>Appropriate controls and mitigations are in place for all significant residual risks.</li>
        <li>A risk management plan has been integrated into the project management plan.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if project risks are not managed.</li>
        <li>An organizational risk management group should be involved.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q48" value="1" >1 = All three criteria are met, OR a risk management plan is not required.</li>
        <li><input type="radio" name = "q48" value="2" >2 = Two of the three criteria are met.</li>
        <li><input type="radio" name = "q48" value="3" ></li>
        <li><input type="radio" name = "q48" value="4" >4 = One of the three criteria is met.</li>
        <li><input type="radio" name = "q48" value="5" >5 = None of the three criteria are met.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Communications</td>
    <td>49. Is an appropriate information management (IM) process planned or in place to collect, distribute, and protect relevant and important project information, such as designs, project plans, baseline, and registers?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if project information is not appropriately managed.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q49" value="1" >1 = Comprehensive information management practices are in place or planned to support the project throughout its life cycle.</li>
        <li><input type="radio" name = "q49" value="2" ></li>
        <li><input type="radio" name = "q49" value="3" >3 = Standard IM practices are planned or in place and resourced.</li>
        <li><input type="radio" name = "q49" value="4" ></li>
        <li><input type="radio" name = "q49" value="5" >5 = Minimal IM practices are in place or planned within the project.</li>
        </ul>
    </td>    
  </tr>
</table>
<br>
<h2>3.7 Project Requirements Risks (15 Questions)</h2>

<table style="width:100%">
  <tr>
    <th>Knowledge Area</th>
    <th>Question</th> 
    <th>Clarifications</th>
    <th style ="width:30%">Rating</th>
  </tr>
  <tr>
    <td rowspan="8">Scope</td>
    <td>50. How many of the following statements are true?
        <ol type ="a">
        <li>The project solution requires a high degree (greater than normal) of availability.</li>
        <li>The project solution requires customization beyond normal configuration.</li>
        <li>The project solution requires a high degree of performance quality.</li>
        <li>The project solution requires a high degree of reliability.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project solution (the major output that the project will deliver) has intricate requirements. The higher the number of specific requirements, the more risk and complexity is inherent.</li>
        <li>Availability refers to the amount of time an asset must be available for use. For instance, a computer system with high availability might be on 99.9% of the time. A building may be in use 24/7. High availability drives different and more complex requirements than low availability. Down time or maintenance time is generally very limited.</li>
        <li>A high degree of performance quality means that a solution must produce very accurate, repeatable and complete results or outputs. This may mean that the solution requires very detailed requirements. Moreover, there may be little room for change in the solution during the delivery of the project due to the quality requirements.</li>
        <li>Reliability refers to how robust an asset is or refers to its resistance to failure. Assets in high use need to be more reliable and; therefore, drive requirements that are more complex.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q50" value="1" >1 = None of the statements are true.</li>
        <li><input type="radio" name = "q50" value="2" >2 = One of the statements is true.</li>
        <li><input type="radio" name = "q50" value="3" >3 = Two of the statements are true.</li>
        <li><input type="radio" name = "q50" value="4" >4 = Three of the statements are true.</li>
        <li><input type="radio" name = "q50" value="5" >5 = All of the statements are true.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>51. In defining project requirements, how many of the following statements are true?
        <ol type ="a">
        <li>The requirements can be defined with very few people.</li>
        <li>The requirements can be defined in a short period of time.</li>
        <li>There are a small number of individual requirements to define.</li>
        <li>The requirements do not require a high degree of detail.</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if project requirements are difficult to fully document.</li>
        <li>More requirements, details, people and/or stakeholders is generally indicative of higher complexity.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q51" value="1" >1 = Four of the statements are true.</li>
        <li><input type="radio" name = "q51" value="2" >2 = Three of the statements are true.</li>
        <li><input type="radio" name = "q51" value="3" >3 = Two of the statements are true.</li>
        <li><input type="radio" name = "q51" value="4" >4 = One of the statements is true.</li>
        <li><input type="radio" name = "q51" value="5" >5 = None of the statements are true.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>52. To what extent have available sources/methods been employed and verified to provide information for this project as applicable (e.g. research, consultations, workshops, surveys, and existing documentation)?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if information for planning, integration, and development has not been sought and verified.</li>
        <li>Identify and document the steps followed to gather high quality information to support the development of the requirements.</li>
        <li>Ideally, an organization is to use organizational practices other than the business case to develop requirements.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q52" value="1" >1 = All sources/methods have been employed and verified.</li>
        <li><input type="radio" name = "q52" value="2" >2 = All sources/methods have been employed but have not been verified.</li>
        <li><input type="radio" name = "q52" value="3" >3 = Some sources/methods have been employed.</li>
        <li><input type="radio" name = "q52" value="4" >4 = Few sources/methods have been employed.</li>
        <li><input type="radio" name = "q52" value="5" >5 = No information has been gathered or is available.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>53. Have the business requirements been validated with users with an appropriate technique, such as walk-throughs, workshops, and independent verification and validation?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if requirements have not been appropriately validated.</li>
        <li>Consider whether the end-users have been involved in the development of the requirements.</li>
        <li>End-users are individuals who will be directly required to interact, use or support the project's output (e.g. new business process, information management system, equipment). This practice is undertaken to avoid situations in which those most directly impacted by a project are not consulted or engaged when developing requirements.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q53" value="1" >1 = Yes</li>
        <li><input type="radio" name = "q53" value="2" ></li>
        <li><input type="radio" name = "q53" value="3" >3 = Validation is a planned activity but has not yet been completed.</li>
        <li><input type="radio" name = "q53" value="4" ></li>
        <li><input type="radio" name = "q53" value="5" >5 = No</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>54. Have feasibility studies been conducted, and is there confidence in the assumptions made in the feasibility studies?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if reliable feasibility studies have not been completed.</li>
        <li>Feasibility can also include options analysis activities or recommendations. Prototypes or proof of concept exercises are included as feasibility activities.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q54" value="1" >1 = Feasibility studies are <b>not</b> required, because none of the requirements are technically difficult to implement.</li>
        <li><input type="radio" name = "q54" value="2" >2 = Feasibility studies were conducted and there is confidence in the assumptions made.</li>
        <li><input type="radio" name = "q54" value="3" ></li>
        <li><input type="radio" name = "q54" value="4" >4 = Feasibility studies were conducted, but there is not complete confidence in the assumptions made.</li>
        <li><input type="radio" name = "q54" value="5" >5 = Feasibility studies were necessary but not conducted.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>55. What percentage of tasks cannot be fully defined until the completion of previous tasks? These are tasks that may be understood but cannot be documented in detail due to dependency on results from a previous task.</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there are indefinable requirements (known unknowns).</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q55" value="1" >1 = under 10 per cent</li>
        <li><input type="radio" name = "q55" value="2" >2 = 20 per cent</li>
        <li><input type="radio" name = "q55" value="3" >3 = 30 per cent</li>
        <li><input type="radio" name = "q55" value="4" >4 = 40 per cent</li>
        <li><input type="radio" name = "q55" value="5" >5 = over 40 per cent</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>56. To what extent are the project's requirements clear, completed, and communicated?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there are uncertain requirements or are accepted requirements that are not included in the specifications.</li>
        <li>If at the outset all requirements can be defined, then the entire project is to be used as the basis for the response. However, if it is not possible to define all requirements at the time of assessment then the current or upcoming phase of the project is to be used as the basis of the response.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q56" value="1" >1 = All requirements are clear, complete, and communicated.</li>
        <li><input type="radio" name = "q56" value="2" ></li>
        <li><input type="radio" name = "q56" value="3" >3 = Up to 10 per cent of total requirements are not complete or are undocumented.</li>
        <li><input type="radio" name = "q56" value="4" ></li>
        <li><input type="radio" name = "q56" value="5" >5 = More than 10 per cent of total requirements are not complete or are unclear.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>57. How many of the following project characteristics are expected to remain stable?
    <ol type ="a">
        <li>quality</li>
        <li>functionality</li>
        <li>schedule</li>
        <li>integration</li>
        <li>design</li>
        <li>testing</li>
        </ol>
        </td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there are unstable project requirements. Project characteristics should be expected to remain stable if the project requirements are stable.</li>
        <li>Consider how well the current information represents the project requirements. If some of the project characteristics are expected to change due to incomplete or uncertain information then the project requirements are to be considered unstable.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q57" value="1" >1 = All of the project characteristics are expected to remain stable.</li>
        <li><input type="radio" name = "q57" value="2" >2 = Five of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio" name = "q57" value="3" >3 = Four of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio" name = "q57" value="4" >4 = Three of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio" name = "q57" value="5" >5 = Two or less of the project characteristics are expected to remain stable.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Investment portfolio management</td>
    <td>58. Are any other projects dependent on outputs or outcomes of this project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if other projects are dependent on this project.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q58" value="1" >1 = No</li>
        <li><input type="radio" name = "q58" value="2" ></li>
        <li><input type="radio" name = "q58" value="3" ></li>
        <li><input type="radio" name = "q58" value="4" ></li>
        <li><input type="radio" name = "q58" value="5" >5 = Yes</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td>Investment portfolio management</td>
    <td>59. Are outcomes of this project dependent on the outputs and/or outcomes of any other projects?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if this project is dependent on other projects.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q59" value="1" >1 = No</li>
        <li><input type="radio" name = "q59" value="2" ></li>
        <li><input type="radio" name = "q59" value="3" ></li>
        <li><input type="radio" name = "q59" value="4" ></li>
        <li><input type="radio" name = "q59" value="5" >5 = Yes</li>
        </ul>
    </td>    
  </tr>
  <tr>
    <td rowspan="5">Scope</td>
    <td>60. What degree of integration with externalities, such as other projects, systems, infrastructure, or organizations, is required?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is a high degree of integration with external elements.</li>
        <li>Consider and identify the answer that best represents the situation for the initiative. Not all the conditions in each answer need apply.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q60" value="1" >1 = There are few complex integration requirements; activities to specify integration are included in the project management plan.</li>
        <li><input type="radio" name = "q60" value="2" ></li>
        <li><input type="radio" name = "q60" value="3" >3 = There is adequate understanding and planning for integration.</li>
        <li><input type="radio" name = "q60" value="4" ></li>
        <li><input type="radio" name = "q60" value="5" >5 = There are highly complex or numerous integration requirements and insufficient planning of required activities.</li>
        </ul>
    </td>    
  </tr>
  <tr>
    
    <td>61. What degree of integration is required within the project?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if there is a high degree of integration with internal elements.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q61" value="1" >1 = There are few complex integration requirements; activities to specify integration are included in the project management plan.</li>
        <li><input type="radio" name = "q61" value="2" ></li>
        <li><input type="radio" name = "q61" value="3" >3 = There is adequate understanding and planning for integration.</li>
        <li><input type="radio" name = "q61" value="4" ></li>
        <li><input type="radio" name = "q61" value="5" >5 = There are highly complex or numerous integration requirements and insufficient planning of required activities.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
  <td>62. Relative to the average (typical) project in your organization, which of the following adjectives describes the number of tasks, elements, or deliverables in the work breakdown structure?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project scope relative to the organization's average project scope is large.</li>
        <li>This question qualifies the materiality (refer to question 1) of the project considering the number of project tasks relative to the organizational average. This comparison can be done by referring to the investment plan and reviewing the overall portfolio of projects.</li>
        <li>Based on the portfolio review, the organization should be in a position to define the average number of tasks is for the portfolio of projects. Each project can then be compared to the average range to answer and support the question.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q62" value="1" >1 = Small</li>
        <li><input type="radio" name = "q62" value="2" ></li>
        <li><input type="radio" name = "q62" value="3" >3 = Medium</li>
        <li><input type="radio" name = "q62" value="4" ></li>
        <li><input type="radio" name = "q62" value="5" >5 = Large</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
  <td>63. Does the project schedule accommodate the critical path of the project, including appropriate contingencies?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the project schedule does not include contingencies for dependent tasks (critical path).</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q63" value="1" >1 = Yes</li>
        <li><input type="radio" name = "q63" value="2" ></li>
        <li><input type="radio" name = "q63" value="3" ></li>
        <li><input type="radio" name = "q63" value="4" ></li>
        <li><input type="radio" name = "q63" value="5" >5 = No, OR no critical path analysis has been performed.</li>
        </ul>
    </td>    
  </tr>
  <tr>
  
  <td>64. What is the effect on the project of the requirement for scarce resources or resources that are in very high demand?</td>
    <td><ul>
        <li>The inherent complexity and risk of the project may increase if the resources needed for the project are scarce or in high demand.</li>
        <li>Resources can be internal or external to the government and can be physical such as materials or human (i.e. people with rare skills). If a resource is scarce internally but available externally, then the resource is not considered scarce.</li>
        </ul>
    </td>
    <td><ul class ="likert">
        <li><input type="radio" name = "q64" value="1" >1 = No scarce resources are required OR not applicable.</li>
        <li><input type="radio" name = "q64" value="2" >2 = The project will incur minor delays or minor cost overruns due to scarcity of resources.</li>
        <li><input type="radio" name = "q64" value="3" >3 = The project will incur moderate delays or moderate cost overruns due to scarcity of resources.</li>
        <li><input type="radio" name = "q64" value="4" >4 = The project will incur significant delays or significant cost overruns due to scarcity of resources and must return to Treasury Board for revised approval.</li>
        <li><input type="radio" name = "q64" value="5" >5 = The success of the project is critically dependent on scarce resources.</li>
        </ul>
    </td>    
  </tr>
</table>
<br>
<div class="form-group">
  <input type="submit" class="btn btn-primary" value="Submit">
  <input type="reset" class="btn btn-primary" value="Cancel">
</div>

</body>
</html>
