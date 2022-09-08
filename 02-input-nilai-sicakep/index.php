<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Ajax</title>
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <style>
        * {
            font-size: 25px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="tambah.php" method="post">
        <table>
            <input type="hidden" name="id_nilai">
            <tr>
                <td>id_pegawai</td>
                <td><input type="text" name="id_pegawai" placeholder="Masukkan id_pegawai Anda"></td>
            </tr>
            <tr>
                <td>id_bulan</td>
                <td><input type="text" name="id_bulan" placeholder="Masukkan id_bulan"></td>
            </tr>
            <tr>
                <td>id_tahun</td>
                <td><input type="text" name="id_tahun" placeholder="Masukkan id_tahun Anda"></td>
            </tr>
            <tr>
                <td>nilai</td>
                <td><input type="text" name="nilai" placeholder="Masukkan nilai"></td>
            </tr>
            <tr>
                <td><button name="submit" type="submit"> Tambah</button></td>
            </tr>
        </table>
    </form>
    <hr>
    <div id="content">

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            loadData();

            $('form').on('submit',function(e){
                e.preventDefault();
                $.ajax({
                    type:$(this).attr('method'),
                    url:$(this).attr('action'),
                    data:$(this).serialize(),
                    success:function(){
                        loadData();
                    }
                });
            })
        })

        function loadData(){
            $.get('data.php', function(data){
                $('#content').html(data)
            })
        }

        function resetForm(){
            $('[type=text]').val('');
            $('[name=nama]').focus();
        }
    </script>
</body>
</html>