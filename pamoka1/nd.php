<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$zmones = [
    [
        'name' => 'Tomas',
        'surname' => 'Tomaitis',
        'age' => 33,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Giedrius',
        'surname' => 'Giedraitis',
        'age' => 22,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Dainė',
        'surname' => 'Dainė',
        'age' => 13,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Arnas',
        'surname' => 'Kairys',
        'age' => 67,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Kestis',
        'surname' => 'Gaizauskas',
        'age' => 43,
        'sex' => [
            'man',
            'woman'
        ],
    ],
];

print $zmones[2]['name'] . ' ' . $zmones[2]['surname'] . ' ' . $zmones[2]['age'] . ' ' . $zmones[2]['sex'][0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <style>
        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php foreach ($zmones[0] as $key => $value) : ?>
                <?php print $key; ?>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($zmones as $value) : ?>
            <tr>
                <?php foreach ($value as $taip) : ?>
                    <td><?php print $taip; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>