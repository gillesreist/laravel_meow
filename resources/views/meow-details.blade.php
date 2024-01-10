<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <ul>
      <li>
         <p>{{ $post->users->name }}</p>
         <p>{{ $post->created_at }}</p>
         <p>{{ $post->message }}</p>
      </li>
   </ul>
</body>

</html>