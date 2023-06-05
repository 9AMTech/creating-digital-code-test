<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/app.css">
  <title>Phone Book</title>
</head>

<body>
  <h1>Edit a Contact!</h1>
  <form action="{{ url('update/' . $contact->id) }}" method="POST">
    @csrf
    <table>
      <tr>
        <th>Last</th>
        <th>First</th>
        <th>Phone</th>
        <th>E-Mail</th>
      </tr>
      <tr>
				<input type="hidden" name="id" id='id' value="{{$contact->id}}"/>
        <td>
          <input type="text" name='last_name' id='last_name'
            value={{ $contact->last_name }}>
        </td>
        <td>
          <input type="text" name='first_name' id='first_name'
            value={{ $contact->first_name }}>
        </td>
        <td>
          <input type="text" name='phone_number' id='phone_number'
            value={{ $contact->phone_number }}>
        </td>
        <td>
          <input type="text" name='email' id='email'
            value={{ $contact->email }}>
        </td>
      </tr>
      <input type="submit" value="SUBMIT">
  </form>
  </table>
  </form>
</body>

</html>
