<html>

<head>
    <title>Caesar Cipher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-color: plum;">
<div class="container">
    <center><h1>Caesar Cipher</h1></center>
    <hr>
    <form action="enkcaesar.php" method="get" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
        <label for="basic">Masukkan Plain Text :</label>
        <textarea class="form-control" name="kata" id="textarea-a"></textarea>
        <label for="basic">Masukkan Key :</label>
        <textarea class="form-control" name="key" id="textarea-a" maxlength="2"></textarea><br>
        <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
        <input type="reset" class="btn btn-danger" value=" Hapus" data-theme="a">
    </form>
</div>
</body>

</html>