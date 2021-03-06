<!----
@function:aireport view
@author:Mahima S
@date:10/03/2021
@module:admin--->

<html>
<head>
<title></title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
</head>
<style>
</style>
<body>
<div class="container-fluid">
<table class="table table-bordered table-info table-striped">
<tr>

<td>Aireport name</td>
<td>Abbrevation</td>
<td>City</td>
<td>State</td>
<td>Pincode</td>
<td>TimeZone</td>

<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>

<td>{{ $item->aname }}</td>
<td>{{ $item->abbrevation }}</td>
<td>{{ $item->city }}</td>
<td>{{ $item->state }}</td>
<td>{{ $item->pincode }}</td>
<td>{{ $item->timezone }}</td>


<td><a href="{{"deleteairport/".$item['id']}}">delete</a></td>
<td><a href="{{"updateairport/".$item['id']}}">update</a></td>


</tr>
</div>
@endforeach
</table>
</body>
</html>