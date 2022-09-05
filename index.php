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
            <input type="hidden" name="id_nama">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
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
                        resetForm();
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