<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

    <h1>This is Register Page</h1>
    <form action="/store" method="post">
        @csrf
        <table>
            <tr>
                <td>Name : -</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email : -</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Gender : -</td>
                <td>
                    <input type="radio" name="gender" value="male" id="">male &nbsp;
                    <input type="radio" name="gender" value="female" id="">female &nbsp;
            
            </td>
            </tr>
            <tr>
                <td>City : -</td>
                <td>
                    <select name="city" id="">
                        <option value="surat">surat</option>
                        <option value="ahemdabad">ahemdabad</option>
                        <option value="rajkot">rajkot</option>
                        <option value="borivali">borivali</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Hobby : -</td>
                <td>
                        <input type="checkbox" name="hobby[]" value="cricket" id="">cricket &nbsp;
                        <input type="checkbox" name="hobby[]" value="football" id="">football &nbsp;
                        <input type="checkbox" name="hobby[]" value="BB" id="">BB &nbsp;
                        <input type="checkbox" name="hobby[]" value="VB" id="">VB &nbsp;

                </td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" id=""></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">register</button>
                </td>
            </tr>
        </table>
    </form>
</div>
