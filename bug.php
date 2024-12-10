```php
function increment_array_values(array &$arr): void {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// Problem scenario: Using foreach with reference in a way that affects the original array unexpectedly
$arr = ['a' => 1, 'b' => 2];
increment_array_values($arr); // Modifies the original array in place
print_r($arr); // Output: Array ( [a] => 2 [b] => 3 )

$arr = [1, 2, [3,4]];
increment_array_values($arr); //This will not work as expected. It will increment the first 2 values but it won't increment the inner array values
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 3 [1] => 4 ) )
```