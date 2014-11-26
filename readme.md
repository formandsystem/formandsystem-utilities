# Form&System Utilities

## Variable
This method check if a variable is defined, if not it returns false, or a default value, if provided as second argument.
While the Utilites method has a facade, the variable method must be called using the default `app::make` way, because the variable is not passed on as a reference otherwise, resulting in errors.

```php
variable($var, 'default');
````
