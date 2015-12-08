<form action="{{ url('post-upload') }}"
  method="POST"
  enctype="multipart/form-data">

 <input type="file" name="image" />

 <input type="submit">
</form>