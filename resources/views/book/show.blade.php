<!DOCTYPE html>
<html>
<head>
<title>Recept</title>
</head>
<body>
    <h1 style="text-align:center">ONLINE BUS RESERVATION SYSTEM</h1><hr>
    <br>
    <p style="text-align:right">Booking Date :{{ $cust->created_at }}</p>
    <p>SERIAL NUMBER: {{ $cust->serial }}<span style="text-align:right">{{ $cust->bus_id }}</span></p>
    <p style="text-align:center">Phone Number:0{{ $cust->phone }}</p>
    <p style="text-align:center">Name :{{ $cust->name }}</p>
    
    


</body>
</html>
