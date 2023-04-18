<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
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
    </style>
  </head>
  <body>
    <h2 style="text-align: center;">Form Biodata</h2>
    <form action="proses.php" method="post">
      <table>
        <tr>
          <td>First Name</td>
          <td>:</td>
          <td><input type="text" name="first-name"></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>:</td>
          <td>
            <input type="radio" name="gender" value="laki-laki" id="male">
            <label for="male">Laki-laki</label>
            <br>
            <input type="radio" name="gender" value="perempuan" id="female">
            <label for="female">Perempuan</label>
          </td>
        </tr>
        <tr>
          <td>Hobby</td>
          <td>:</td>
          <td>
            <input type="checkbox" name="hobby[]" value="Koresponden 1" id="hobby1">
            <label for="hobby1">Koresponden 1</label><br>
            <input type="checkbox" name="hobby[]" value="Traveling" id="hobby2">
            <label for="hobby2">Traveling</label>
            <br>
            <input type="checkbox" name="hobby[]" value="Shopping" id="hobby3">
            <label for="hobby3">Shopping:</label>
          </td>
        </tr>
        <tr>
          <td>Pendidikan</td>
          <td>:</td>
          <td>
            <select name="pendidikan">
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="Universitas">Universitas</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat"></textarea></td>
        </tr>
      </table>
      <button type="submit">Simpan</button>
    </form>
  </body>
</html>
