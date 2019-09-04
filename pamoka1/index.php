<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$people = [
     'man' => [
               [
           'name' => 'Tomas',
           'surname' => 'Tomaitis',
           'childrenNumber' => 2,
           'workStatus' => [
               'working',
               'do not working'
            ],

        ],
        [
            'name' => 'Vytas',
            'surname' => 'Adomaitis',
            'childrenNumber' => 1,
            'workStatus' => [
                'working',
                'do not working'
             ],
 
         ],
    ],
           
           'woman' => [
            'name' => 'Dalia',
            'surname' => 'Tomaitė',
            'childrenNumber' => 2,
            'workStatus' => [
                'working',
                'do not working'
            ],
        ],
      
];
// var_dump($people);

// foreach($people as $value){

// }
// foreach($people as $key => $value){
    

// if (){

// }elseif ($x == 0;){
//     print 'ubagas';
// }elseif ($x == $x){
//     print 'turi ferari';

// }else
?>
<!DOCTYPE html>
   <html lang="en">
<head>
    <title>Forma</title>
    <style>
    .form-control{
        width: 200px;
    }
    </style>
</head>
<body>
    <form>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Vyras/Moteris</label>
     <select class="form-control" id="exampleFormControlSelect1" name="sex">
                <?php foreach ($people as $key => $value):?>
                    <option><?php print $key; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Vardas</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <?php if ($_POST['sex'] =='man'){
                    foreach ($people['man'] as $key => $man): ?>
                    <option><?php print $man['name']; ?></option>
                    <?php endforeach; ?>
                <?php else: ?>
                <?php foreach ($people['woman'] as $key => $woman): ?>
                <option><?php print $woman['name']; ?></option>
                <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
        <input type="submit" value="Paspausk"></button>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Info</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <?php if ($_POST['sex'] =='man'){
                    foreach ($people['man'] as $key => $man): ?>
                        <option><?php print $man['childrenNumber']['workStatus']; ?></option>
                    <?php endforeach; ?>
                <?php else: ?>
                              <?php foreach ($people['woman'] as $key => $woman): ?>
                            <option><?php print $woman['childrenNumber']['workStatus']; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
    </form>
</body>
</html>