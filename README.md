# Former

Former is a Bootstrap 3 file upload form creator for Laravel 4.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"ahir/former": "dev-master"
	}
}
```

### Usage

After installing the package, open your Laravel config file app/config/app.php and add the following lines.

In the $providers array add the following service provider for this package.

```php
'Ahir\Former\FormerServiceProvider',
```

### Examples Blade

```php	
{{ Former::formOpen() }}
	{{ Former::inputFile() }}
	{{ Former::inputSubmit() }}
{{ Former::formClose() }}
```