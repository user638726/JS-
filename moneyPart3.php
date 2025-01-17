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
</head>

<body>

    <div class="container mt-3">
        <input type="text" name="form-control" id="originInput" placeholder="ex.10">
        <input type="text" name="form-control" id="rateInput" placeholder="ex.1.08">
        <button type="button" id="myBtn" class="btn btn-primary">複利計算</button>
    </div>
    <hr>
    <div class="container-fluid mt-3">
        <h2>複利計算 每年投<span id="myOrigin">10</span>萬 利率<span id="myRate">1.08</span></h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>年分</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td class="tdname">tdname</td>
                    <td class="td1">td1</td>
                    <td class="td2">td2</td>
                    <td class="td3">td3</td>
                    <td class="td4">td4</td>
                    <td class="td5">td5</td>
                    <td class="td6">td6</td>
                    <td class="td7">td7</td>
                    <td class="td8">td8</td>
                    <td class="td9">td9</td>
                    <td class="td10">td10</td>
                </tr> -->
            </tbody>
        </table>
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

        function calculate(origin, rate) {
            console.log('origin', origin);
            console.log('rate', rate);
            mkArrFun(origin, rate);
            console.log('tmpArr', tmpArr);
            mkTableFun();


        }

        function mkArrFun(originMoney, rate) {
            myOrigin.text(originMoney);
            myRate.text(rate);


            console.log('mkArrFun ok');
            tmpArr = [];
            sum = 0;
            tmpObj = {};
            tmpArr = [];
            tmpYear = 1;

            // 第一年
            for (let i = 1; i <= 10; i++) {
                if (sum == 0) {
                    sum = originMoney.toFixed(2);
                }
                // console.log(`o 第${i}年 => ${sum}`);
                tmpObj[i] = sum;

                // sum = Number(((sum) * rate).toFixed(2));
                sum = ((sum) * rate).toFixed(2);


                // console.log(`c 第${i}年 => ${sum}`);
            }
            tmpObj['name'] = `第${tmpYear}年`;
            tmpArr.push(tmpObj);

            // 第二年
            for (let index = 2; index <= 10; index++) {
                tmpYear = index;
                tmpObj = {};
                sum = 0;
                for (let i = 1; i <= 10; i++) {
                    if (i < tmpYear) {
                        let tmp = 0;
                        tmpObj[i] = tmp.toFixed(2);
                        continue;
                    }

                    if (i == tmpYear) {
                        sum = originMoney + Number(tmpArr[tmpYear - 2][tmpYear]);
                        // console.log(`o ${tmpYear} - 第${i}年 => ${sum}`);
                        let tmpText = Number(sum).toFixed(2);
                        tmpObj[i] = tmpText;
                        // console.log('change sum', sum);
                        sum = ((sum) * rate).toFixed(2);
                        // console.log(`c 第${i}年 => ${sum}`);
                        continue
                    }

                    // console.log(`o ${tmpYear} - 第${i}年 => ${sum}`);
                    // console.log('sum', sum);
                    // console.log('sum typeof', typeof (sum));

                    let tmpText = Number(sum).toFixed(2);
                    tmpObj[i] = tmpText;
                    // console.log('change sum', sum);
                    sum = ((sum) * rate).toFixed(2);

                    // console.log(`c 第${i}年 => ${sum}`);
                }
                tmpObj['name'] = `第${index}年`;
                tmpArr.push(tmpObj);

                // console.log('tmpObj', tmpObj);

            }
        }


        function mkTableFun() {
            myTbody.html('');
            $.each(tmpArr, function(key, value) {
                let tmpText = `
                        <tr>
                            <td class="tdname">${value['name']}</td>
                            <td class="td1">${value[1]}</td>
                            <td class="td2">${value[2]}</td>
                            <td class="td3">${value[3]}</td>
                            <td class="td4">${value[4]}</td>
                            <td class="td5">${value[5]}</td>
                            <td class="td6">${value[6]}</td>
                            <td class="td7">${value[7]}</td>
                            <td class="td8">${value[8]}</td>
                            <td class="td9">${value[9]}</td>
                            <td class="td10">${value[10]}</td>
                        </tr>
                     `;
                myTbody.append(tmpText);

            });
        }

        // 1.bind
        let initOriginMoney = 10;
        let initRate = 1.08;
        let sum = 0;
        let tmpObj = {};
        let tmpArr = [];
        let tmpYear = 1;

        const myTable = $('#myTable');
        const myTbody = myTable.find('tbody');

        const originInput = $('#originInput');
        const rateInput = $('#rateInput');
        const myBtn = $('#myBtn');

        const myOrigin = $('#myOrigin');
        const myRate = $('#myRate');


        console.log('tmpObj', tmpObj);

        // 2.action

        // init action
        mkArrFun(initOriginMoney, initRate);
        mkTableFun();

        myBtn.click(function(e) {
            let getOrigin = Number(originInput.val());
            let getRate = Number(rateInput.val());
            console.log('getOrigin', getOrigin);
            console.log('getRate', getRate);

            // run function
            calculate(getOrigin, getRate)

            // 1.[{},{},.....]

            // 2.to html


        });

        // init action



    });

    // jquery
    </script>
</body>

</html>