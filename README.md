# Ezamux Core

Set of Method usefull for laravel project

## TRAITS

### Rest

If you use the ressource method on your laravel routes :

```php
<?php

    Route::resource('users', 'UserController');`
```

You can use this simple Trait on your Controllers and define the static $model variables :

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ezamux\Traits\Rest;

class UserController extends Controller
{
    use Rest;

    public static $model = "App\User";
}
```

Or you can pick separately Api or Web Rest's Method you want

```php
use Ezamux\Traits\Rest\Api;

use Ezamux\Traits\Rest\Api\Destroy;
use Ezamux\Traits\Rest\Api\Index;
use Ezamux\Traits\Rest\Api\Show;
use Ezamux\Traits\Rest\Api\Store;
use Ezamux\Traits\Rest\Api\Update;

use Ezamux\Traits\Rest\Web;

use Ezamux\Traits\Rest\Web\Create;
use Ezamux\Traits\Rest\Web\Edit;

```

The Rest\Web\traits method return the add.blade.php file based on model name directory ( kebab-case )

Model User : resources/view/user/add.blade.php
Model MobilHome : resources/view/mobil-home/add.blade.php

return view
### RESOLVER


### DETERMINATOR
insert during migration columns :
created_by, updated_by, deleted_by

with the the helper

`$table->determinator($deletor = true);`

And auto-fill it with the Auth::user() during creating, updating and deleting method

add relation
```php
<?php

Use Ezamux/Traits/Determinator;

class Post {
    use Determinator;
}

$post = Post::find(1);
$post->creator();
$post->updator();
$post->deletor();

```

the deleted_by column and deletor relation are available automatically, to disable ( no SoftDetele Model ) :

`
$table->determinator(false);
`
## PROVIDERS
### Blueprint

Add the `$table->determinator($determinator = true)` macro for Blueprint

### Blade

Add the @route() and @routein() blade statement

```php
{{-- Route::currentRouteName() = home --}}
@route('home')
YES
@endroute

@routenot('admin')
NO
@endroutenot

grouped route ( dot prefix )
{{-- Route::currentRouteName() = admin.users --}}
@routein('home')
NO
@endroutein

@routenotin('admin')
YES
@endroutenotin
```

All directive can have multiple parameters :
```
@route('home', 'admin', 'rgpd')
```

Pretty usefull for navigation highlighting

