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
  <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="detail_date_index">
      <input type="date" name="date" class="detail_data">
      <a href="{{ route('item.index') }}" class="detail_index">一覧</a>
    </div>
    <div class="create_input_file">
      <input type="file" name="img_path" class="create_img" id="img" onchange="setImage(this);" onclick="this.value = '';">
      <img id="preview" class="create_preview">
    </div>

    <p class="detail_driay_title">今日の英単語</p>
    <input type="text" name="english" class="detail_driay">
    <p class="detail_driay_title">今日の良かった事</p>
    <input type="textarea" name="good_point" class="detail_driay">
    <p class="detail_driay_title">今日の改善点</p>
    <input type="textarea" name="bad_point" class="detail_driay">
    <input type="submit" value="アップロード" class="create_submit">
  </form>

  <script>
    function setImage(target) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("preview").setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(target.files[0]);
    };
    </script>
</body>
</html>