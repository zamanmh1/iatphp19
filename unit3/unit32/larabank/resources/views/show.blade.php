<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account {{$account->id}}</title>
  </head>
  <body>
    <h1>Account Number {{$account -> accountNumber}}</h1>
    <ul>
      <li>Balance: {{ $account -> balance}}</li>
      <li>Interest: {{$account -> interest}}</li>
      <li>Created: {{$account -> created_at}}</li>
    </ul>

  </body>
</html>
