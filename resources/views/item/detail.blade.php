<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
  <div class="detail_date_index">
    <h1 class="detail_data">{{ $items->date }}</h1>
    <a href="{{ route('item.index') }}" class="detail_index">一覧</a>
  </div>
    <img src="{{ asset(Storage::url($items->img_path)) }}" class="detail_img">
    <p class="detail_driay_title">今日の英単語</p>
    <p class="detail_driay">{{ $items->english }}</p>
    <p class="detail_driay_title">今日の良かった事</p>
    <p class="detail_driay">{{ $items->good_point }}</p>
    <p class="detail_driay_title">今日の改善点</p>
    <p class="detail_driay">{{ $items->bad_point }}</p>
</body>
</html>