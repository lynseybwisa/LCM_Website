<?php

use App\Student;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/staff', 'Auth\LoginController@showStaffLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/staff', 'Auth\RegisterController@showStaffRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/staff', 'Auth\LoginController@StaffLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/staff', 'Auth\RegisterController@createStaff');


Route::any('/searchStudents', function () {
    $students = Student::paginate(6);
    $studentes = Student::all();
    $q = Request::input('q');
    $user = Student::where('name', 'LIKE', '%' . $q . '%')->get();
    if (count($user) > 0)

        return view('admin.index', ['students' => $students, 'studentes' => $studentes])->withDetails($user)->withQuery($q);
    else
        return view('admin.index', ['students' => $students, 'studentes' => $studentes])->withErrors(['Student not found. Try again !']);
});
Route::any('/searchStudentReports', function () {
    $students = Student::paginate(6);
    $studentes = Student::all();
    $q = Request::input('q');
    $user = Student::where('name', 'LIKE', '%' . $q . '%')->get();
    if (count($user) > 0)

        return view('teachers.index', ['students' => $students, 'studentes' => $studentes])->withDetails($user)->withQuery($q);
    else
        return view('teachers.index', ['students' => $students, 'studentes' => $studentes])->withMessage('Student not found. Try again !');
});
Route::get('/calendar', function () {
    return view('calendar/termDates');
});
Route::get('/calendarAdmin', function () {
    return view('fullcalendar');
});
/*Route::get('/termDates', function () {
    return view('termDates');
});*/

//Route::view('calendar', 'calendar/userSide');
Route::view('termDates', 'calendar/termDates');
//Route::view('calendarAdmin', 'calendar/fullcalendar');


Route::post('/fullcalendar/index', 'FullCalendar@index');
Route::post('/fullcalendar/update', 'FullCalendar@update');
Route::post('/fullcalendar/insert', 'FullCalendar@insert');
Route::post('/fullcalendar/load', 'FullCalendar@load');
Route::post('/fullcalendar/delete', 'FullCalendar@delete');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/create', 'StudentsController@create');
Route::get('users/{id}/edit/', 'UserController@edit');
Route::get('teachers/studentReport/{student}', 'TeachersController@studentReport');
Route::get('admin/studentReport/{student}', 'StudentsController@studentReport');
Route::get('teachers/create', 'TeachersController@create');
Route::resource('/galleries', 'GalleriesController');
Route::resource('students', 'StudentsController');
Route::resource('teachers', 'TeachersController');
Route::resource('parents', 'ParentsController');
Route::resource('users', 'UserController');


Route::get('index', function () {
    return view('index');
});

Route::post('footer','footerController@sendMessage');

Route::view('history', 'about/history');
Route::view('philosophy', 'about/philosophy');
Route::view('vision', 'about/vision');
Route::view('committees', 'committees');

Route::view('admissions', 'admissions/admissions');
Route::view('fee', 'admissions/fee');
Route::view('curriculum', 'admissions/curriculum');
Route::get('parent', 'DataController@getSchools');
Route::get('parent', 'DataController@getSchools');
Route::post('parent','parentsDetailsController@store');
Route::get('dropdownlist','DataController@getSchools');
Route::get('dropdownlist/getclasses/{id}','DataController@getClasses');

Route::view('primary', 'schools/primary');

Route::get('/', 'PagesController@index');
Route::get('/sports', 'PagesController@sports');
Route::get('/cirricular', 'PagesController@cirricular');
Route::get('/alumni', 'PagesController@alumni');