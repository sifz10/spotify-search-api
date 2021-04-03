<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Result</title>
  </head>
  <body>
    <ol>
      @for ($i=0; $i < 10; $i++)
        <li>
        @php
          echo $k = $result->tracks->items[$i]->name;
          // echo $l = $result->tracks->items['1']->release_date;
        @endphp
      </li>
      @endfor
    </ol>
  </body>
</html>
