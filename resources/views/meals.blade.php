<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meals</title>
  </head>
  <body>
    <div>
      @foreach ($meals as $meal)
        <x-meal :meal="$meal" />
      @endforeach
    </div>
  </body>
</html>
