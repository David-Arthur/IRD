# RevolvingDoors

Click [here](https://laracasts.com/series/laravel-5-fundamentals/episodes/1) for a video tutorial on Laravel.

© University of Southern Indiana - 2015

## Views

- Every view should extend the master template using the following line of code : 
```
@extends('template.master')
```
- The content of each page should be in a "content" section as follows :  
```
@section('content')
Hello World!
@endsection
```
- A whole page could be: 
```
@extends('template.master')
@section('content')
Hello World!
@endsection
```

## Controllers

- When calling a view, remember to pass the name of the page in an array with the index `page_title`:
```
...
public function showPage()
{
	return view('home', ['page_title' => 'Home']);
}
...
```

## Checking User Status

- If you happen to need to check whether a user is logged in or not you can do use this:
```
if (Auth::check())
{
	//user is logged in, show content
}
else
{
	//user is not logged in, show login page
}
```
- Do not forget to include `use Auth` in at the top of your file