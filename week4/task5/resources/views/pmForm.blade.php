@extends('./layouts/master')

@section('title')
    Prime Ministers
@endsection

@section('content')

<h3>Query</h3>
<p>In the form: Name, Year, State</p>

@yield('errorMessage')

<form method="get" action="search">
    <table>
      {{-- <?= $error ?> --}}
      <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
      <tr><td>Year: </td><td><input type="text" name="year"></td></tr>
      <tr><td>State: </td><td><input type="text" name="state"></td></tr>
      <tr><td colspan=2><input type="submit" value="Search">
                        <input type="reset" value="Reset"></td></tr>
    <table>
</form>
@endsection