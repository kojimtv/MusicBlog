<html>
<head>
    {{-- <script type="text/javascript" src="js/test.js"></script> --}}
    <script src="{{ asset('/js/test.js') }}"></script>
</head>

<body>

    <div id="first">1個目のdiv</div>
    <div id="sec">2個目のdiv</div>
    <div id="thi">3個目のdiv</div>

    <input type="text" id="name">
    <button id="btn">ボタン</button>
    <div id="disp-name"></div>

    <div id="result"></div>
    <button id="up-btn">カウントアップ</button>
    <button id="down-btn">カウントダウン</button>

    <div id="omikuji"></div>
    <button id="start-btn">おみくじスタート</button>


    <label for="num1">入力欄1</label>
    <input id="num1" placeholder="入力欄1" type="text">
    <label for="num2">入力欄2</label>
    <input id="num2" placeholder="入力欄2" type="text">
    <button id="sum_btn">計算</button>
    <div class="mt-3" id="result_area"></div>


</body>
<script>
    {{-- alert(document.getElementById('sec').innerHTML); --}}
    document.getElementById('sec').innerHTML = "chane";

    var btn = document.getElementById("btn");
    btn.addEventListener("click", function(){
        var name = document.getElementById("name").value;
        document.getElementById("disp-name").innerHTML = name;
    })

    // おみくじ
    var omikuji = document.getElementById("omikuji");
    var startBtn = document.getElementById("start-btn");

    omikuji.innerHTML = "おみくじします。";

    startBtn.addEventListener("click", function(){
        var omikujiNum = Math.floor(Math.random() * 3);

        if (omikujiNum == 0) {
            omikuji.innerHTML = "大吉";
        }else if(omikujiNum == 1) {
            omikuji.innerHTML = "中吉";
        } else {
            omikuji.innerHTML = "それ以外";
        }
    })


    // カウンターアプリ
    var num = 5;
    var upBtn = document.getElementById("up-btn");
    var downBtn = document.getElementById("down-btn");
    // 結果部分
    var result = document.getElementById("result");

    document.getElementById("result").innerHTML = num;

    upBtn.addEventListener("click", function(){
        num += 1;
        result.innerHTML = num;
        //document.getElementById("result").innerHTML = num;
    })

    downBtn.addEventListener("click", function(){
        num -= 1;
        result.innerHTML = num;
        //document.getElementById("result").innerHTML = num;
    })
    // /カウンターアプリ


</script>
</html>
