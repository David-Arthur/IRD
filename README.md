# RevolvingDoors

Click [here](https://laracasts.com/series/laravel-5-fundamentals/episodes/1) for a video tutorial on Laravel.

© University of Southern Indiana - 2015

## How to get the project to run on your PC/Mac

- Make sure you have a database installed and running (if you're using MAMPP/XAMPP/WAMPP it should be installed)
- Change the `.env.example` file to reflect the configuration of YOUR database. In the file you may find something like :
```
...
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
...
```
1. Change the DATABASE file to the name of the database you're using. You can go to mysql console or Phpmyadmin and create one. If you go to the console, type something like to access MySQL:
```
PS C:/ > mysql -h localhost -u YOURUSERHERE 
```

 - If you have set up a password:
```
PS C:/ > mysql -h localhost -u YOURUSERHERE -p YOURPASSWORDHERE 
```

 - Now, create a Database :
```
PS C:/ > create database revolving_doors 
```

 - Go back to you `.env` file and change the database line to 
```
DB_DATABASE=revolving_doors
```

 - Change the username and password line to reflect what you used in the first steps.

2. Migrate the Database. 
 - Go to the root folder of the project. On Windows PowerShell it should be something like: 
 ``` 
 cd C:\xampp\htdocs\RevolvingDoors\RevolvingDoors
 ```
 - And just do the migration:
 ```
 PS C:\xampp\htdocs\RevolvingDoors\RevolvingDoors > php artisan migrate
 ``` 
3. Creating An Encryption Key
 - You may be experiencing 
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