<!-- resources/views/upload.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h2>Form Upload Foto</h2>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="document" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
