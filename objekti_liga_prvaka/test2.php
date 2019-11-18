 <?php
  $myArray = [
              [
                ['name'=>'John B'],
                ['age'=>30],
                ['sizes'=>
                          [
                          'weight'=>80, 
                          'height'=>120
                          ]
                ]
              ],
              [
                ['name'=>'Marie B'],
                ['age'=>31],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>110
                          ]
                ]
              ],
              [
                ['name'=>'Carl M'],
                ['age'=>12],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>100
                          ]
                ]
              ],
              [
                ['name'=>'Mike N'],
                ['age'=>19],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Nancy N'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Cory X'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>44, 
                          'height'=>150
                          ]
                ]
              ]
  ];
  
  echo "<pre>";
            print_r($myArray);
            echo "</pre>";
  
$rang=usort($myArray, function($a, $b) {
    return $a['age'] <=> $b['age'];
});

    echo "<pre>";
            print_r($rang);
            echo "</pre>";
  
  ?>