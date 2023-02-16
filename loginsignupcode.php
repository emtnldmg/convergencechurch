 <?php 
                            include 'db_conn.php';
                           
                            if(isset($_POST['login_btn']))
                            $email = $_POST['uname'];
                            $password = $_POST['password'];

                            $query = "SELECT * FROM users WHERE email= '$email' AND password = '$password' ";

                            $query_run = mysqli_query($conn,$query);
                            $users = mysqli_fetch_array($query_run);
                            if($email == ['email'])
                            {
                                echo " <li class='nav__item'>
                                <a href='logout.php' class='nav__link'>Logout</a>
                                </li>";
                                header('Location:index.php');
                                exit;
                            }
                            else
                            {
                                echo "<li class='nav__item'>
                                <a href='login.php' class='nav__link'>LogIn</a>
                                </li>";
                                header('Location:index.php');
                                exit;
                            }
                            ?>
                        