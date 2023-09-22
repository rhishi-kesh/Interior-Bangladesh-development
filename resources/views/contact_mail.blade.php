<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #fe0000;
  color: white;
}
</style>
</head>
<body>
    <h2 style="text-align: center; text-transfrom: uppercase; margin-bottom: 10px">Interior Bangladesh</h2>
    <table id="customers" >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Massage</th>
        </tr>
        <tr>
            <td>{{ $details['name'] }}</td>
            <td>{{ $details['email'] }}</td>
            <td>{{ $details['phone'] }}</td>
            <td>{{ $details['message'] }}</td>
        </tr>
    </table>
</body>
</html>
