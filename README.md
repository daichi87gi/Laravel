# Laravel

A Laravel practise project. This project uses:

* PHP 7
* Laravel 5.6
* XAMPP
* Bootstrap 4.x

## Random Notes

### Useful Commands

* Clear the cash of views: `php artisan view:clear`
* Create a controller class: `php artisan make:controller PostController`

### Laravel IDE Helper

https://github.com/barryvdh/laravel-ide-helper

### Request and Response

Dependency Injection (a good practise in general)

```php
$request->input('mail')
```

Facades

```php
Request::input("mail')
```

### RSRF Protection

```blade
<input type="hidden" name="_token" value="{{ csrf_token() }}">
```

Shorter syntax

```blade
{{ csrf_field() }}
```

### Validations

Validation in Router

```php
// routes/web.php

$validation = $validator->make($request->all(), [
    'title' => 'required|min:5',
    'content' => 'required|min:10'
]);
if ($validation->fails()) {
    return redirect()->back()->withErrors($validation);
}
```

Validation in Controller

```php
// PostController.php

$this->validate($request, [
    'title' => 'required|min:5',
    'content' => 'required|min:10'
]);

// automatically pass the error and redirect if there is an error
```

### Routes

With no controller

```php
Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');
```

With a controller

```php
Route::get('/', 'PostController@getIndex')->name('blog.index');
```

Structured route syntax

```php
Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as => 'blog.index'
]);
```

Saving one-time data (Flashed Session Data) in route

https://laravel.com/docs/5.6/redirects#redirecting-with-flashed-session-data

```php
return redirect()->route('admin.index')->with('info', 'Post edited, new Title: ' . $request->input('title'));
```

### Blade Template

https://laravel.com/docs/5.6/blade

Using a master layout

```blade
File: layouts/admin.blade.php

<div class="container">
    @yield('content')
</div>
```

```blade
File: admin/index.blade.php

@extends('layouts.admin')

@section('content')
    something goes here
@endsection
```

if

```blade
@if(Session::has('info'))
    something goes here
@else
    something goes here
@endif
```

foreach

```blade
@foreach($posts as $post)
    ...
    <a href="{{ route('admin.edit', ['id' => array_search($post, $posts)]) }}">Edit</a>
    ...
@endforeach
```

for

```blade

@for($i = 0; $i < 5; $i++)
    <p>{{ $i + 1 }}.Iteration</p>
@endfor
```

Display data

```blade
<p>{{ "Hello" }}</p>
<p>{{ $name }}</p>
<p>{{ 2 == 2 ? "Equal" : "Does not equal" }}</p>
<p>{{ 2 == 3 ? "Equal" : "Does not equal" }}</p>
```

XSS Protected

```blade
{{ "<script>alert('Hello');</script>" }}
```

Raw data - Not protected

```blade
{!! "<script>alert('Hello');</script>" !!}}
```
