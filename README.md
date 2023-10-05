# SomeTeamsWebsite

# ✨SomeTeams✨

SomeTeams is a simple website coded in PHP. It contains the information about 7 football teams dispalyed in different ways. 


## Tech

SomeTeams uses HTML, CSS and PHP. It's open source with a [public repository](https://github.com/lillastormen/SomeTeamsWebsite) on GitHub.

## Development

Information about the teams is stored in data.php file and then required in other files which use these data (teams.php, table.php and cities.php).

Index.php file uses all of these files to create a webpage.

🔹 **Foreach** 🔹loop was used in order to **obtain** and **echo** the information about:

- Unique city values
```sh
<?php

require "data.php";

$uniqueCities = [];

foreach ($teams as $team) {
    $city = $team['city'];
    if (!in_array($city, $uniqueCities)) {
        $uniqueCities[] = $city;
    }
}
?>
```


```sh
<ul>
    <?php foreach($uniqueCities as $city): ?>
        <li><?php echo $city ?></li>
    <?php endforeach; ?>
</ul>

```

- All the data printed out in a HTML table:

```sh
<?php foreach ($teams as $teamName => $teamData): ?>
        <tr>
            <td><?php echo $teamName; ?></td>
            <td><?php echo $teamData['league']; ?></td>
            <td><?php echo $teamData['last-time-champions']; ?></td>
            <td><?php echo $teamData['city'] ; ?></td>
            <td><a href="<?php echo $teamData['url']; ?>"><?php echo $teamData['url']; ?></a></td>
        </tr>
    <?php endforeach; ?>
```

## License

MIT

🙆‍♀️

