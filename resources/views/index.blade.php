<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Phone Book</title>
</head>

<body>
  <h1>Creating Digital's Phonebook!</h1>
  <a href="{{ url('/add') }}">
    <button>ADD CONTACT</button>
  </a>
  @csrf
  <table>
    <tr>
      <th>Actions</th>
      <th>Last</th>
      <th>First</th>
      <th>Phone</th>
      <th>E-Mail</th>
    </tr>
    @foreach ($contacts as $contact)
      <tr>
        <td>
          (<a href="{{ url('edit/' . $contact->id) }}">EDIT</a>)
          (<a href="{{ url('delete/' . $contact->id) }}">DEL</a>)
        </td>
        <td>{{ $contact->last_name }}</td>
        <td>{{ $contact->first_name }}</td>
        <td>{{ $contact->phone_number }}</td>
        <td>{{ $contact->email }}</td>
      </tr>
    @endforeach
  </table>
</body>

</html>
