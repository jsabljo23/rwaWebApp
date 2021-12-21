@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex">
    <div class="row flex-fill">
        <div class="col-md-6 adminDash">
            <br>
            <br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Email</th>
                    
                  </tr>
                </thead>
                <tbody>
            <?php
                $hostname = "localhost:3306";
                $username = "root";
                $password = "";
                $database = "carBuyDB";

                $conn=new mysqli($hostname,$username,$password,$database);
                if(!$conn){
                    die('Error In connection'.mysqli_connect_error());
                }else{
                    echo 'Connection Success<br>';
                    $read = "SELECT * FROM users";

                    $result = mysqli_query($conn,$read);

                    while($row = mysqli_fetch_assoc($result)){ 

                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                        
                    }
                }
                    mysqli_close($conn);

                    
            ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection