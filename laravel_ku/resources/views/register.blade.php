<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h1>Buat Account Baru!</h1></p>
    <p><h2>Sign Up Form</h2></p>
    <form id="signup" method="post" action="/welcome">
    @csrf
      <table>
        <tr>
          <td >
            <label >First Name :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" size="30" id="fnama" name="first"/>
          </td>
        </tr>
        <tr>
          <td>
            <label>Last Name :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" size="30" id="lname" name="last"/>
          </td>
        </tr>
        <tr>
          <td>
            <label>Gender :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
          </td>
        </tr>
        <tr>
          <td>
            <label>Nationality :</label>
          </td>
        </tr>
        <tr>
          <td>
            <select name="natonaluty" id="natonaluty">
              <option value="Indonesia">Indonesia</option>
              <option value="korea">Korea</option>
              <option value="Jepang">Jepang</option>
              <option value="Vietnam">Vietnam</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Language Spoken :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" id="bhs1" name="bhs1" value="Bahasa Indonesia">
            <label for="bhs1"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="bhs2" name="bhs2" value="English">
            <label for="bhs2">English</label><br>
            <input type="checkbox" id="bhs3" name="bhs3" value="Other">
            <label for="bhs3">Other</label><br>
          </td>
        </tr>
        <tr>
          <td>
            <label>Bio :</label>
          </td>
        </tr>
        <tr>
          <td >
            <textarea id="bio" name="bio" rows="5" cols="30"></textarea>
          </td>
        </tr>
        <tr>
          <td >
            <button type="submit" >Sign Up</button>
          </td>
        </tr>
      </table>
    </form>

</body>
</html>