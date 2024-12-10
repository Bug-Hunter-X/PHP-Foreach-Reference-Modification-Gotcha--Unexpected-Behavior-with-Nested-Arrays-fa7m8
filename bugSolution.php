```php
function increment_array_values_safe(array $arr): array {
  $newArray = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
        $newArray[$key] = increment_array_values_safe($value);
    } else {
        $newArray[$key] = $value + 1;
    }
  }
  return $newArray;
}

$arr = [1, 2, [3,4]];
$incrementedArr = increment_array_values_safe($arr);
print_r($incrementedArr); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )

$arr = ['a' => 1, 'b' => 2];
$incrementedArr = increment_array_values_safe($arr);
print_r($incrementedArr); // Output: Array ( [a] => 2 [b] => 3 )
```