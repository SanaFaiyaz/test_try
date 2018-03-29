

<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $car->id }}</title>
  </head>
  <body>
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Color: {{ $car->color }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Name: {{ $car->name }}</li>
    </ul>
  </body>
</html>