@extends('layouts.admin_app')

@section('content')
<style>
    @import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");
* {
  margin: 0;
  padding: 0; }

body {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg") center center no-repeat;
  background-size: cover;
  width: 100vw;
  height: 100vh;
  display: grid;
  align-items: center;
  justify-items: center; }

.contact-us {
  background: #f8f4e5;
  padding: 50px 100px;
  border: 2px solid black;
  box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black; }

input {
  display: block;
  width: 100%;
  font-size: 14pt;
  line-height: 28pt;
  font-family: "Fjalla One";
  margin-bottom: 28pt;
  border: none;
  border-bottom: 5px solid black;
  background: #f8f4e5;
  min-width: 250px;
  padding-left: 5px;
  outline: none;
  color: black; }

input:focus {
  border-bottom: 5px solid #ffa580; }

button {
  display: block;
  margin: 0 auto;
  line-height: 28pt;
  padding: 0 20px;
  background: #ffa580;
  letter-spacing: 2px;
  transition: .2s all ease-in-out;
  outline: none;
  border: 1px solid black;
  box-shadow: 3px 3px 1px 1px #95a4ff, 3px 3px 1px 2px black; }
  button:hover {
    background: black;
    color: white;
    border: 1px solid black; }

::selection {
  background: #ffc8ff; }

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
  border-bottom: 5px solid #95a4ff;
  -webkit-text-fill-color: #2A293E;
  -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
  transition: background-color 5000s ease-in-out 0s; }

</style>
<div class="contact-us">
    <form action="{{url('result/'.$result->id)}}" method="post">
      @csrf
      @method("PUT")
      <input type="text" placeholder="Terminal" required name="term" value="{{$result->term}}">
        <input type="number" value="{{$result->symbolnumber}}" placeholder="Symbol Number" required name="symbolnumber">
        <input type="text" value="{{$result->gpa}}" placeholder="GPA" required name="gpa">
        <button type="submit">Edit and Update Result</button>
    </form>
</div>

@endsection
