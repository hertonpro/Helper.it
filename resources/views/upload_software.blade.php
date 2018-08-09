<!DOCTYPE html>
<html>
<body>

<form action="{{URL::to('store')}}" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="" method='post' action="URL::to('/store')" entype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    <button type="submit" name="button">Upload file</button>
</form>

</body>
</html>