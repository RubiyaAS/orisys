<!----
@function:flight view
@author:Rubiya AS
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
<table class="table table-bordered table-info table-striped">
<tr>

<td>Company name</td>
<td>Flightid</td>
<td>From</td>
<td>To</td>
<td>Departure Time</td>
<td>Arrival Time</td>
<td>Economic Seat</td>
<td>Bussiness Seat</td>
<td>First Class Seat</td>
<td>Date</td>
<td>Economic Cost</td>
<td>Bussiness Cost</td>
<td>FirstClass Cost</td>
<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>

<td>{{ $item->cname }}</td>
<td>{{ $item->flightid }}</td>
<td>{{ $item->flyfrom }}</td>
<td>{{ $item->flyto }}</td>
<td>{{ $item->dtime }}</td>
<td>{{ $item->atime }}</td>
<td>{{ $item->eseat }}</td>
<td>{{ $item->bseat }}</td>
<td>{{ $item->fseat }}</td>
<td>{{ $item->date }}</td>
<td>{{ $item->ecost }}</td>
<td>{{ $item->bcost }}</td>
<td>{{ $item->fcost }}</td>

<td><a href="{{"delete/".$item['id']}}">delete</a></td>
<td><a href="{{"update/".$item['id']}}">update</a></td>


</tr>
@endforeach
</table>
</body>
</html>