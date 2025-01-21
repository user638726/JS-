<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .box1 {
        border: 5px solid black;
        margin: auto;
        width: 80%;
        height: 50vh;
        /* background-color: lightblue; */
    }

    .box2 {
        margin: auto;
        width: 80%;
        /* height: 50vh; */
        /* background-color: lightpink; */
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    span {
        font-size: 40px;
    }

    img {
        /* width: 100%; */
    }

    .container-box {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .img-box {
        width: 100%;
        height: 45vh;
        /* background-color: lightblue; */
        overflow: hidden;
    }
    </style>
</head>

<body>

    <div class="container text-center mt-5">
        <h2>投籃大賽</h2>
        <hr>
    </div>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-2">
                <div class="img-box">
                    <img src="./images/ball_left.png" class="img-fluid mt-3 rounded" alt="" srcset="">
                </div>
            </div>
            <div class="col-8">
                <div class="box1">
                    <div class="container-box">
                        <div>
                            倒數計時<br>
                            <span id="timer">60</span>
                        </div>
                        <div>
                            最高分數<br>
                            <span id="highScore">999</span>
                        </div>
                    </div>
                    <br><br><br>
                    <p>
                        分數
                    </p>
                    <p>
                        <span id="nowScore">168</span>
                    </p>
                </div>
            </div>
            <div class="col-2">
                <div class="img-box ">
                    <img src="./images/ball.png" class="img-fluid mt-3 rounded" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
        <div class="box2">
            <button type="button" id="startBtn"
                class="btn btn-dark btn-lg">開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;始</button>
            <button type="button" id="shootBtn"
                class="btn btn-dark btn-lg">投&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;球</button>
            <button type="button" id="resetBtn" class="btn btn-danger btn-lg">重&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;置

            </button>
        </div>
        <hr>
    </div>

    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(document).ready(function() {

        // 1.bind
        const nowScore = $('#nowScore');
        const highScore = $('#highScore');
        const timer = $('#timer');
        const startBtn = $('#startBtn');
        const shootBtn = $('#shootBtn');
        const resetBtn = $('#resetBtn');

        let scoreVar = 0;
        let scoreHighVar = 0;
        let timeVar = 20;
        let gameFlag = true;
        let tmpTime = 0;

        nowScore.text(scoreVar);
        highScore.text(scoreHighVar);
        timer.text(timeVar);

        shootBtn.hide();

        // 2.action
        startBtn.click(function(e) {
            if (gameFlag == false) {
                console.log('gameFlag false', gameFlag);
                return false;
            }
            startBtn.hide();
            shootBtn.show();
            console.log('startBtn ok');
            // timer -1 / sec / 開始 start 停止 0
            const myInterval = setInterval(myTimer, 1000);
            tmpTime = timeVar;

            function myTimer() {
                tmpTime = tmpTime - 1;
                if (tmpTime < 0) {
                    gameFlag = false;
                    clearInterval(myInterval);
                    startBtn.show();
                    shootBtn.hide();
                } else {
                    timer.text(tmpTime);
                }

            }

            function myStop() {
                clearInterval(myInterval);
            }

        });

        shootBtn.click(function(e) {
            if (gameFlag == false) {
                console.log('gameFlag false', gameFlag);
                return false;
            }
            // 兩分球 31-60
            // 三分球 0-30
            console.log('tmpTime', tmpTime);
            if (tmpTime <= 10) {
                scoreVar += 3;
            } else {
                scoreVar += 2;
            }




            nowScore.text(scoreVar);
        });

        resetBtn.click(function(e) {
            console.log('resetBtn ok');
        });


    });
    </script>
</body>

</html>