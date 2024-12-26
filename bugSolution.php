```php
function my_function($param) {
  if ($param === null) {
    return null; // Handle null explicitly
  } else {
    // ... your code using $param (safe, because it's not null) ...
  }
}
```