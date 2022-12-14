<?php

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

require(app_path().'/pms.php');  // The file containing the pms array is in the app directory. 
                                 // app_path() give us the path the the app directory


Route::get('/', function()
{
  // Remove the line below, and implement your own code.
	return view('pmForm');
});


// To do: Perform search and display results
Route::get('search', function()
{
  // Fetch form data.
  $name = request('name');
  $year = request('year');
  $state = request('state');

  // if (empty($name) && empty($year) && empty($state)){
  //   // empty
  //   return view('pmError', ["message" => "You must enter a search parameter."]);
  // } elseif(!is_numeric($year)){
  //   // number isn't empty
  //   return view('pmError', ["message" => "Year must be a number"]);
  // };

  // call search() to perform search
  $results = search($name, $year, $state);
  // dd($results);

  // call view to display search result
  return view('pmResults', [
    "name" => $name,
    "year" => $year,
    "state" => $state,
    "results" => $results
  ]);
});


/* Functions for PM database example. */

/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {
  $pms = getPms();

  // Filter $pms by $name
  if (!empty($name)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['name'], $name) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  // Filter $pms by $year
  if (!empty($year)) {
    $results = array();
    foreach ($pms as $pm) {
      if (strpos($pm['from'], $year) !== FALSE || 
          strpos($pm['to'], $year) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  // Filter $pms by $state
  if (!empty($state)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['state'], $state) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  return $pms;
}
