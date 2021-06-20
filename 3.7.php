<!DOCTYPE html>
<html>
<head>
<style>
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
        <li><input type="radio"  value="1" >1 = None of the statements are true.</li>
        <li><input type="radio"  value="2" >2 = One of the statements is true.</li>
        <li><input type="radio"  value="3" >3 = Two of the statements are true.</li>
        <li><input type="radio"  value="4" >4 = Three of the statements are true.</li>
        <li><input type="radio"  value="5" >5 = All of the statements are true.</li>
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
        <li><input type="radio"  value="1" >1 = Four of the statements are true.</li>
        <li><input type="radio"  value="2" >2 = Three of the statements are true.</li>
        <li><input type="radio"  value="3" >3 = Two of the statements are true.</li>
        <li><input type="radio"  value="4" >4 = One of the statements is true.</li>
        <li><input type="radio"  value="5" >5 = None of the statements are true.</li>
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
        <li><input type="radio"  value="1" >1 = All sources/methods have been employed and verified.</li>
        <li><input type="radio"  value="2" >2 = All sources/methods have been employed but have not been verified.</li>
        <li><input type="radio"  value="3" >3 = Some sources/methods have been employed.</li>
        <li><input type="radio"  value="4" >4 = Few sources/methods have been employed.</li>
        <li><input type="radio"  value="5" >5 = No information has been gathered or is available.</li>
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
        <li><input type="radio"  value="1" >1 = Yes</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" >3 = Validation is a planned activity but has not yet been completed.</li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = No</li>
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
        <li><input type="radio"  value="1" >1 = Feasibility studies are <b>not</b> required, because none of the requirements are technically difficult to implement.</li>
        <li><input type="radio"  value="2" >2 = Feasibility studies were conducted and there is confidence in the assumptions made.</li>
        <li><input type="radio"  value="3" ></li>
        <li><input type="radio"  value="4" >4 = Feasibility studies were conducted, but there is not complete confidence in the assumptions made.</li>
        <li><input type="radio"  value="5" >5 = Feasibility studies were necessary but not conducted.</li>
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
        <li><input type="radio"  value="1" >1 = under 10 per cent</li>
        <li><input type="radio"  value="2" >2 = 20 per cent</li>
        <li><input type="radio"  value="3" >3 = 30 per cent</li>
        <li><input type="radio"  value="4" >4 = 40 per cent</li>
        <li><input type="radio"  value="5" >5 = over 40 per cent</li>
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
        <li><input type="radio"  value="1" >1 = All requirements are clear, complete, and communicated.</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" >3 = Up to 10 per cent of total requirements are not complete or are undocumented.</li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = More than 10 per cent of total requirements are not complete or are unclear.</li>
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
        <li><input type="radio"  value="1" >1 = All of the project characteristics are expected to remain stable.</li>
        <li><input type="radio"  value="2" >2 = Five of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio"  value="3" >3 = Four of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio"  value="4" >4 = Three of the six project characteristics are expected to remain stable.</li>
        <li><input type="radio"  value="5" >5 = Two or less of the project characteristics are expected to remain stable.</li>
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
        <li><input type="radio"  value="1" >1 = No</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" ></li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = Yes</li>
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
        <li><input type="radio"  value="1" >1 = No</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" ></li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = Yes</li>
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
        <li><input type="radio"  value="1" >1 = There are few complex integration requirements; activities to specify integration are included in the project management plan.</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" >3 = There is adequate understanding and planning for integration.</li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = There are highly complex or numerous integration requirements and insufficient planning of required activities.</li>
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
        <li><input type="radio"  value="1" >1 = There are few complex integration requirements; activities to specify integration are included in the project management plan.</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" >3 = There is adequate understanding and planning for integration.</li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = There are highly complex or numerous integration requirements and insufficient planning of required activities.</li>
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
        <li><input type="radio"  value="1" >1 = Small</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" >3 = Medium</li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = Large</li>
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
        <li><input type="radio"  value="1" >1 = Yes</li>
        <li><input type="radio"  value="2" ></li>
        <li><input type="radio"  value="3" ></li>
        <li><input type="radio"  value="4" ></li>
        <li><input type="radio"  value="5" >5 = No, OR no critical path analysis has been performed.</li>
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
        <li><input type="radio"  value="1" >1 = No scarce resources are required OR not applicable.</li>
        <li><input type="radio"  value="2" >2 = The project will incur minor delays or minor cost overruns due to scarcity of resources.</li>
        <li><input type="radio"  value="3" >3 = The project will incur moderate delays or moderate cost overruns due to scarcity of resources.</li>
        <li><input type="radio"  value="4" >4 = The project will incur significant delays or significant cost overruns due to scarcity of resources and must return to Treasury Board for revised approval.</li>
        <li><input type="radio"  value="5" >5 = The success of the project is critically dependent on scarce resources.</li>
        </ul>
    </td>    
  </tr>
