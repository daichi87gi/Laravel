# Laravel

A Laravel practise project. This project uses:

* PHP 7
* XAMPP
* Bootstrap 4.x

## Random Notes

### Useful Commands

Clear the cash of views: `php artisan view:clear`

### Laravel IDE Helper

https://github.com/barryvdh/laravel-ide-helper

### Request and Responses

#### Dependency Injection vs Facades

Dependency Injection (a good practise in general)

`$request->input('mail')`

Facades

`Request::input("mail')`

#### RSRF Protection

* `<input type="hidden" name="_token" value="{{ csrf_token() }}">`
* Shorter syntax: `{{ csrf_field() }}`

#### Save one-time data (called Sessions) in routes

`return redirect()->route('admin.index')->with('info', 'Post edited, new Title: ' . $request->input('title'));`

### Controllers and Models

