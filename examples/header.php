<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <div class="logo">
                <a href="http://savnac.tech/examples/dashboard.php" class="simple-text logo-normal">
                    <img src="../assets/img/logo.png" alt="SAVNAC Logo" style="width: 60px; height: 60px; vertical-align: middle;">
                    <span style="font-size: 24px; font-weight: bold; color: white;">SAVNAC</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?php if ($filename == "dashboard") {echo "active";}  ?>">
                <!-- ... rest of your code ... -->
                        <a class="nav-link" href="./dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    <li class="nav-item <?php if ($filename == "tables") {echo "active";}  ?>">
                        <a class="nav-link" href="./tables.php">
                            <i class="material-icons">content_paste</i>
                            <p>Schedule</p>
                        </a>
                    </li>
                
                <li class="nav-item <?php if ($filename == "courseDetails") {echo "active";}  ?>">
                    <a class="nav-link dropdown-toggle" href="courseDetails.php" id="coursesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">menu_book</i>
                        Courses
                    </a>
                    <div class="dropdown-menu gradient-green" aria-labelledby="coursesDropdown" x-placement="top-start" style="position: absolute; top: 5px; left: -332px; will-change: top, left; max-width: 250px;">
                    <?php
                     $json_data = file_get_contents('http://savnac.tech:8080/api?method=getcourses');
                     $data = json_decode($json_data, true);
                      if ($data['success'] == 1) {
                        echo '<ul style="list-style-type: none; padding-left: 0;">';
                        foreach ($data['result'] as $courseID => $courseName) {
                            echo '<li><a class="dropdown-item" href="courseDetails.php?name=' . $courseID . '" style="white-space: nowrap; overflow: hidden; text-overflow: none;">' . $courseName . '</a></li>';
                        }

                        echo '</ul>';
                    } else {
                        echo 'API request was not successful.';
                    }
                    ?>

                        <!-- <a class="dropdown-item" href="">MATH140</a>
                        <a class="dropdown-item" href="#">CMPSC131</a>
                        <a class="dropdown-item" href="#">PHYS211</a>
                        <a class="dropdown-item" href="#">ECON 102</a>
                        <a class="dropdown-item" href="#">THEA100</a> -->
                    </div>
                </li>
                
                        
                </li>
                
                    
                    
                    <li class="nav-item <?php if ($filename == "notifications") {echo "active";}  ?>">
                        <a class="nav-link" href="./notifications.php">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>

                    <!-- <li class="nav-item <?php if ($filename == "user") {echo "active";}  ?> ">
                        <a class="nav-link" href="./user.php">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>