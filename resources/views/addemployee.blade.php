@extends("theme")

@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
<div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
<table class="table table-borderless">
<tr>
    <td>Employee name</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td>Employee code</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input type="text" class="form control"></td>
</tr>
    <td>DOB</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td>Pin code</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td>Ph no.</td>
    <td><input type="text" class="form control"></td>
</tr>
<tr>
    <td></td>
    <td><Button class="btn btn-success">Submit</Button></td>
</tr>
</table>
</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div></div></div>
@endsection