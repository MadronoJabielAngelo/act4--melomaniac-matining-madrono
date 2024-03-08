<html>
<head>
<title>Spokiffy</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: black;">
    <h1 style="color: black;">Activity #5</h1>
    <a> </a>
    <a style="color: black;">Mark John B. Matinig & Jabiel Angelo C. Madrono | BSI/T-2A</a>
    
<div class="music-container">
    
<div  class="music-header">
<i class="fa fa-angle-left"></i> 
<div class="title"><p>Spokiffy</p></div>
<i class="fa fa-search"></i>
</div> 
 
<div class="music-playlist">
<div class="music-menu text-center">
    <div class="menu">
    <ul>
        <li><a>Guitar Chords and Lyrics</a></li>
    </ul>
    </div>
</div>   
    
<div class="music-box">
    <div class="music-info">
        <div class="music-img">
            <img src="1.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song1.php" style="color: white;">Take All The Love</a></h6>
            
            <p>Arthur Nery</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="2.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song2.php" style="color:white;">Somewhere Only We Know</a></h6>
            <p>Keane</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="3.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song3.php" style="color:white;">Still Into You</a></h6>
            <p>Paramore</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr> 
    
    <div class="music-info">
        <div class="music-img">
            <img src="4.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song4.php" style="color:white;">Alam Mo Ba Girl</a></h6>
            <p>Hev Abi</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="5.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song5.php" style="color:white;">You'll Be Safe Here</a></h6>
            <p>Rico Blanco</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="6.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song6.php" style="color:white;">You Belong With Me</a></h6>
            <p>Taylor Swift</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr> 
    <div class="music-info">
        <div class="music-img">
            <img src="7.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song7.php" style="color:white;">Gusto Ko Ang Nota</a></h6>
            <p>Aleck Bovick</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="8.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song8.php" style="color:white;">If The World Was Ending</a></h6>
            <p>JP Saxe</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr>
    
    <div class="music-info">
        <div class="music-img">
            <img src="9.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song9.php" style="color:white;">Best Friend</a></h6>
            <p>Rex Orange County</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div><hr> 
    
    <div class="music-info">
        <div class="music-img">
            <img src="10.jpg">
        </div>
        <div class="music-name">
            <h6><a href="song10.php" style="color:white;">Best Friend</a></h6>
            <p>Jason Chen</p>
        </div>
        <i class="fa fa-ellipsis-v"></i>
    </div>   
</div>
    
</div>
    <div class="music-play">
        <div class="play-image">
            <img src="4.jpg">
        </div>

        <div class="play-controls">
            <div class="controls">
                <div class="song-name">
                    <h5>Alam Mo Ba Gar</h5>
                    <p>Bev Avi</p>
                </div>
                <div class="play-icon" onclick="toggleAudio()">
                    <i class="fa fa-step-backward"></i>
                    <audio id="audioPlayer" src="Audio.mp3"></audio>
                    <i id="playPauseBtn" class="fa fa-play"></i>
                    <i class="fa fa-step-forward"></i>
                </div>
            </div>

            <div class="music-progress">
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>

        </div>

    </div>
</div>

    <script>
        function toggleAudio() {
            var audio = document.getElementById("audioPlayer");
            var playPauseBtn = document.getElementById("playPauseBtn");

            if (audio.paused) {
                audio.play();
                playPauseBtn.className = "fa fa-pause";
            } else {
                audio.pause();
                playPauseBtn.className = "fa fa-play";
            }
        }
    </script>
</body>
</html>