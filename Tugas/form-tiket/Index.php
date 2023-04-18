<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Form Tiket Bola</title>
    <style>
      table {
        border-style: none;
        margin: 20px auto;
        width: 500px;
      }
      td {
        padding: 10px;
      }
      button {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        border: none;
        background-color: blue;
        color: white;
        font-size: 16px;
        cursor: pointer;
      }

      h2{
        text-align:center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }
    </style>
  </head>
  <body>
    <h2>FORM TIKET BOLA SEAGAMES 2018</h2><br>
    <h2>INDONESIA VS MALAYSIA<br>PUKUL 15.00 WIB</h2><br><br>

    <form action="proses.php" method="post">
      <table>
        <tr>
          <td>NAMA PEMESAN</td>
          <td>:</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>TELP</td>
          <td>:</td>
          <td><input type="text" name="telp"></td>
        </tr>
        <tr>
          <td>Tiket</td>
          <td>:</td>
          <td>
            <select name="Tiket">
              <option value="Reguler">Reguler</option>
              <option value="VIP">VIP</option>
              <option value="VVIP">VVIP</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Jumlah Tiket</td>
          <td>:</td>
          <td><input type="number" name="jumlah-tiket"><br>lembar</td>
        </tr>
      </table>
      <button type="submit">Simpan</button>
    </form>
  </body>
</html>
