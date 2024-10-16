<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Contoh Form dengan PHP dan Jquery</title>
</head>

<body>
    <h2>Form</h2>
    <form id="myForm">
        <label for="buah">Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br><br>

        <label for="">Pilih warna favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>
        <br>

        <label for="">Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="laki-laki"> Laki-laki <br>
        <input type="radio" name="jk" value="perempuan"> Perempuan <br>
        <br>

        <input type="submit" value="Submit" id="submitButton">

        <div id="hasil">

        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'proses_lanjut.php',
                    data: formData,
                    success: function(response) {
                        $('#hasil').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>
