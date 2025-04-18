@extends('layouts.master')

@section('title')
Form Master
@endsection

@section('content')
<h1>Buat Account Baru!</h1>

<h2>Sign Up Form</h2>

<form action="/welcome" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <label for="firstname">First Name:</label><br /><br />
    <input
        type="text"
        name="firstname"
        id="firstname"
        required
        placeholder="Nama Depan" />
    <br />
    <br />
    <label for="lastname">Last Name:</label><br /><br />
    <input type="text" name="lastname" id="lastname" />
    <br />
    <br />
    <label>Gender:</label><br /><br />
    <input type="radio" value="1" name="gender" />Male <br />
    <input type="radio" value="2" name="gender" />Female <br />
    <input type="radio" value="3" name="gender" />Other <br />
    <br />
    <label>Nationality:</label><br /><br />
    <select name="nationality">
        <option value="1">Indonesia</option>
        <option value="2">Japan</option>
        <option value="3">Singapura</option>
    </select>
    <br />
    <br />
    <label>Language Spoken:</label><br /><br />
    <input type="checkbox" value="1" />Bahasa Indonesia <br />
    <input type="checkbox" value="2" />Japan <br />
    <input type="checkbox" value="3" />English <br />
    <br />
    <label for="bio">Bio:</label><br /><br />
    <textarea name="bio" id="bio" rows="10" cols="30"></textarea>
    <br />
    <br />
    <input type="submit" value="Sign Up" />
</form>
@endsection
