<?php require "data.php"; ?>

<table id="football_teams">
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>Last Championship</th>
        <th>City</th>
        <th>Website</th>
    </tr>
    <?php foreach ($teams as $teamName => $teamData): ?>
        <tr>
            <td><?php echo $teamName; ?></td>
            <td><?php echo $teamData['league']; ?></td>
            <td><?php echo $teamData['last-time-champions']; ?></td>
            <td><?php echo $teamData['city'] ; ?></td>
            <td><a href="<?php echo $teamData['url']; ?>"><?php echo $teamData['url']; ?></a></td>
        </tr>
    <?php endforeach; ?>
</table>

