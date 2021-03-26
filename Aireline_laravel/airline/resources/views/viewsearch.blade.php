<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View flights</title>
      <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    <style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:auto;
		}
	</style>
</head>

<body>
    
<div class="container-fluid">
<table class="table table-bordered table-info table-striped">
			<thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Flight ID</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Economic Seat</th>
                        <th>Bussiness Seat</th>
                        <th>First Class Seat</th>
                        <th>Date</th>
                        <th>Economic Cost</th>
                        <th>Bussiness Cost</th>
                        <th>First Class Cost</th>
                        <th>Booking</th>
                    </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->cname}}</td>
                <td>{{$user->flightid}}</td>
                <td>{{$user->flyfrom}}</td>
                <td>{{$user->flyto}}</td>
                <td>{{$user->dtime}}</td>
                <td>{{$user->atime}}</td>
                <td>{{$user->eseat}}</td>
                <td>{{$user->bseat}}</td>
                <td>{{$user->fseat}}</td>
                <td>{{$user->date}}</td>
                <td>{{$user->ecost}}</td>
                <td>{{$user->bcost}}</td>
                <td>{{$user->fcost}}</td>
                <td><a href="" class="btn btn-info" role="button">BOOK NOW</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</body>
</html>