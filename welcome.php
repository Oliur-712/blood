<!DOCTYPE html>
    <head>
        <title>Blood Bank</title>
        <base href="https://colorlib.com/etc/lf/Login_v10/">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="wrap-login100 p-t-50 p-b-90" style="margin-left: 50px;">
            <form class="login100-form validate-form flex-sb flex-w">
                <span style="color: #17A589" class="login100-form-title p-b-51">Blood Bank</span>  
                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                    <input class="input100" type="text" name="name" placeholder="Name">
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn" style="background-color: #17A589">Search</button>       
                    <br><br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Group</th>
                                <th>Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = new mysqli("localhost", "root", "", "blood");
                            $result = $conn->query("SELECT * FROM info");
                            if ($result->num_rows && isset($_GET['name']) && !empty($_GET['name'])) 
                                while($row = $result->fetch_assoc())
                                    if(strpos(strtolower($row["nam"]), strtolower($_GET['name'])) !== false)
                                        echo "<tr>
                                          <td>" . $row["nam"] . "</td>
                                          <td>" . $row["grp"] . "</td>
                                          <td>" . $row["num"] . "</td>
                                        </tr>";
                            ?>
                        </tbody>
                    </table>  
                </div>
            </form>
        </div>
    </body>
</html>