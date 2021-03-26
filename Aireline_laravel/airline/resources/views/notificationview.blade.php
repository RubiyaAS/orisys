<!----
@function:notification view
@author:Rubiya A S
@date:10/03/2021
@module:Admin--->

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

<td>id</td>
<td>notification</td>
<td>fid</td>
<td>date</td>


<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>

<td>{{ $item->id }}</td>
<td>{{ $item->notification }}</td>
<td>{{ $item->fid }}</td>
<td>{{ $item->date }}</td>



<td><a href="{{"deletenoti/".$item['id']}}">delete</a></td>
<td><a href="{{"updatenoti/".$item['id']}}">update</a></td>


</tr>
@endforeach
</table>
</body>
</html>