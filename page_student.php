<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page_student.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Essay Speed Checker</title>
</head>
<body>
    <div id="overlay" onclick="off(this.id)">
        
    </div>
    <div id="account-space">
        <div id="account-modal">
            <div id="account-title">SETTINGS</div>
            <div id="account-username">Gio Allanson Mangaoang</div>
            <div><input type="text" placeholder="Update Username"></div>
            <div id="set-cred"><button>SET</button></div>
            <div id="account-email">giomangaoang215@gmail.com</div>
            <div><input type="email"  placeholder="Update email"></div>
            <div id="set-cred"><button>SET</button></div>
            <div id="account-cnumber">09608663386</div>
            <div><input type="tel" pattern="[0-9]{11}"  placeholder="Update cellphone-number"></div>
            <div id="set-cred"><button>SET</button></div>
        </div>
    </div>
    <div id="student-navbar">
        <div id="company-title" class="col-12" data-toggle="tooltip" title="Hooray!">
            Mother of Divine Providence School
        </div>
        <div id="student-details" class="col-12">
            <div><img src="images/profile.jpg" id="profile-pic" alt=""></div>
            <div id="vl"></div>
            <div id="profile-name-email">Name: Gio Allanson Mangaoang <br> Email: giomangaoang215@gmail.com <br> Role: Student</div>
        </div>
        <div id="student-sub-bar" class="col-12">
            <div class="student-sub-bar-tab" id="student-sub-bar-tab1">Room</div>
            <div class="student-sub-bar-tab" id="student-sub-bar-tab1-1"><i class="material-icons">door_front</i></div>
            <div class="student-sub-bar-tab" id="student-sub-bar-tab2">Tasks</div>
            <div class="student-sub-bar-tab" id="student-sub-bar-tab2-2"><i class="material-icons">add_circle</i></div>
            <div class="student-sub-bar-tab" id="student-sub-bar-tab3">Grades</div>
            <div class="student-sub-bar-tab" id="student-sub-bar-tab3-3"><i class="material-icons">assignment_turned_in</i></div>
        </div>
        
    </div>
    <div id="student-rooms" class="col-12">
        <div id="list-of-rooms" class="col-12">
            <div>
                <div id="table-rooms">
                    <table>
                        <thead>
                            <tr>
                                <th>room name</th>
                                <th>teacher</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>On Queue</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>On Queue</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>On Queue</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>On Queue</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>On Queue</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>Accepted</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>Accepted</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>Teacher Name Sample</td><td>Accepted</td><td><i class="enter-room material-icons">meeting_room</i></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="room-search">
                <div><label class="search-room-label" for="search-room">Room: </label><input type="text" id="search-room"></div>
                <div><label class="search-room-label" for="room-code">Code: </label><input type="text" id="search-room"></div>
                <div><button class="search-room-label-btn">SEARCH</button></div>
            </div>    
        </div>
    </div>
    <div id="student-write" class="col-12">
        <div id="list-of-tasks" class="col-12">
            <div>
                <div id="table-tasks">
                    <table>
                        <thead>
                            <tr>
                                <th>question</th>
                                <th>due date</th>
                                <th>teacher</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                            <tr><td>Computer Science Room 1</td><td>##:##:## ####-##-##</td><td>Teacher Name Sample</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
    <div id="student-grades" class="col-12">
        <div id="table-grades">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 40%">Question</th>
                            <th style="width: 40%">Answer</th>
                            <th style="width: 10%">Score</th>
                            <th style="width: 10%">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                        <tr><td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi animi qui porro quas esse eligendi mollitia est omnis, consequuntur fugit! Nobis quod dolorum debitis aut impedit officiis numquam sequi.</td><td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet saepe quaerat perferendis tenetur sed eaque ipsum totam error, neque iste ipsam incidunt similique voluptatem ipsa magni fuga molestiae at. Laborum!</td><td>45/50</td><td><i class="enter-room material-icons">history_edu</i></td></tr>
                    </tbody>
                </table>
        </div>
    </div>




    <script>
        function on(input) {
            document.getElementById("overlay").style.display = "block";
            if (input == 1){
                document.getElementById("account-modal").style.display = "flex";
            }
        
        
        }

        function off(input) {
            if(input == "overlay"){
                document.getElementById("overlay").style.display = "none";
                document.getElementById("account-modal").style.display = "none";
            }
        
        }

        $("#profile-pic").click(function(){on(1)});

        $("#student-sub-bar-tab1").click(
            function(){
                document.getElementById("student-rooms").style.display = "flex";
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("student-write").style.display = "none";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("student-grades").style.display = "none";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#student-sub-bar-tab2").click(
            function(){
                document.getElementById("student-rooms").style.display = "none";
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("student-write").style.display = "flex";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("student-grades").style.display = "none";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#379683";
                
            }
        );

        $("#student-sub-bar-tab3").click(
            function(){
                document.getElementById("student-rooms").style.display = "none";
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("student-write").style.display = "none";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("student-grades").style.display = "flex";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";
                
            }
        );

        $("#student-sub-bar-tab1-1").click(
            function(){
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("student-rooms").style.display = "flex";
                document.getElementById("student-write").style.display = "none";
                document.getElementById("student-grades").style.display = "none";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#student-sub-bar-tab2-2").click(
            function(){
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("student-rooms").style.display = "none";
                document.getElementById("student-write").style.display = "flex";
                document.getElementById("student-grades").style.display = "none";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#student-sub-bar-tab3-3").click(
            function(){
                document.getElementById("student-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("student-rooms").style.display = "none";
                document.getElementById("student-write").style.display = "none";
                document.getElementById("student-grades").style.display = "flex";
                document.getElementById("student-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("student-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";

            }
        );

        $(window).resize(function () {
            page_start();
        });

        page_start();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>