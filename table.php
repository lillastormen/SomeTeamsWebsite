<table id="football_teams">
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>Last Championship</th>
        <th>City</th>
        <th>Website</th>
    </tr>

<?php 

require "data.php";

foreach ($teams as $teamName => $teamData)
{
    echo '<tr>';
    echo '<td>' . $teamName . " " . '</td>';
    echo '<td>' . $teamData['league'] . " " . '</td>';
    echo '<td>' . $teamData['last-time-champions'] . " " . '</td>';
    echo '<td>' . $teamData['city'] . " " . '</td>';
    echo '<td><a href="' . $teamData['url'] . '">' . $teamData['url'] . '</a></td>';
    echo '</tr>';
}

?>

</table>

