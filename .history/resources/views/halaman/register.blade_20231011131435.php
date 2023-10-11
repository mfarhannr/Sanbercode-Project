
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/kirim" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="namaDepan"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="namaBelakang"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="Gender">Male<br>
        <input type="radio" name="Gender">Female<br>
        <input type="radio" name="Gender">Other<br><br>

        <label>Nationality:</label><br><br>
        <select name="nationality">
            <option value="">Indonesian</option>
            <option value="">Malaysia</option>
            <option value="">Singapore</option>
            <option value="">Australian</option>
        </select><br><br>

        <label>Languange Spoken:</label><br><br>
        <input type="checkbox">Bahasa Indonesian<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br><br>

        <label>Bio:</label><br><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
