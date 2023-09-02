<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="{{ route('item.create') }}" class="index_create">登録</a>
  @foreach ($items as $item)
    <div class="index_date_detail">
      <a href="{{ route('item.detail', ['id'=>$item->id]) }}" class="index_dete">{{ $item->date }}</a>
      <p class="index_english">{{ $item->english }}</p>
    </div>
  @endforeach
</body>
</html>
