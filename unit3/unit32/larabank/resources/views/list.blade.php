<table>
  <thead>
    <tr>
      <th>id</th>
      <th>Account</th>
      <th>Type</th>
      <th>Interest</th>
      <th>Created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($accounts as $account)
    <tr>
      <td> {{$account -> id}}</td>
      <td> {{$account -> accountNumber}}</td>
      <td> {{$account -> type}}</td>
      <td> {{$account -> balance}}</td>
      <td> {{$account -> interest}}</td>
      <td> {{$account -> created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
