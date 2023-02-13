<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>
            title sample
        </title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <!-- bootstrap link -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="p-3 mx-2">
        <div class="contaner-body">
            <nav class="navbar navbar-expand-lg bg-body-secondary fixed-top p-2">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">HAPPY VALENTINES DAY! 🎉💓💜</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">US BOTH 👨🏻‍❤️‍💋‍👩🏻</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="memories.php">MEMORIES 👨🏻‍❤️‍💋‍👩🏻</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="watchme.php">WATCH ME! 👀</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-watch mt-5 my-5">
            <div class="row">
                <h4>
                    HI BABI KO 🥰💜 I LOVE YOUUU😘👨🏻‍❤️‍💋‍👩🏻💜💕 !!!
                </h4>
                <video id="myVideo" controls class="w-100">
                    <source src="https://video.fmnl3-1.fna.fbcdn.net/v/t42.3356-2/329813322_5759500284179668_5104799427194917480_n.mp4?_nc_cat=110&ccb=1-7&_nc_sid=060d78&_nc_eui2=AeEGHL2aXX6eMed4F2YVIKu32hgy-1KD1oDaGDL7UoPWgNctP8cnugUJjUrjDhNucsG_VsMZEmK3tqNQZ9cvbd3F&_nc_ohc=UCCG5sQp0d4AX96bcLx&_nc_ht=video.fmnl3-1.fna&oh=03_AdRthN_2LX2oVbIDLQIsnEcv-brxqDGPIleenHpXSSWF4A&oe=63EA79FA&dl=1" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>    
    </body>
</html>