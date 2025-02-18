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
        <h2>Bordered Table</h2>
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
    let originMoney = 10;
    let tmp = 0;
    let rate = 1.08;
    let sum = 0;
    let tmpObj = {};
    for (let i = 1; i <= 10; i++) {
        let sum = (i === 1) ? originMoney : tmpObj[i - 1].sum; // 计算每年的金额
        console.log(`o 第${i}年 => ${sum}`);
        tmpObj[i] = {
            sum: sum
        };

        sum = Number(((sum) * rate).toFixed(2));
        console.log(`c 第${i}年 => ${sum}`);
        tmpObj[i].sum = sum;
    }

    tmpObj['name'] = '第一年';

    // 加入第二年的数




    $(document).ready(function() {
        let origin = 10;
        let rate = 1.1;
        let myArr = [{
                name: 1,
                1: origin,
                2: tmp * rate,
                3: 11.66,
                4: 12.60,
                5: 13.60,
                6: 14.69,
                7: 15.87,
                8: 17.14,
                9: 18.51,
                10: 19.99
            },
            {
                name: 2,
                1: 0.00,
                2: 20.80,
                3: 22.46,
                4: 24.26,
                5: 26.20,
                6: 28.30,
                7: 30.56,
                8: 33.01,
                9: 35.65,
                10: 38.50
            }
        ]
    });

    // jquery
    // 1.bind
    const myTable = $('#myTable');
    const myTbody = myTable.find('tbody');

    //console.log('tmpObj.name', tmpObj.name);

    // 2.action

    $(document).ready(function() {
        // 顯示第一年的數據let 
        myArr = [{
                name: 1,
                1: origin,
                2: tmp * rate,
                3: 11.66,
                4: 12.60,
                5: 13.60,
                6: 14.69,
                7: 15.87,
                8: 17.14,
                9: 18.51,
                10: 19.99
            },
            {
                name: 2,
                1: 0.00,
                2: 20.80,
                3: 22.46,
                4: 24.26,
                5: 26.20,
                6: 28.30,
                7: 30.56,
                8: 33.01,
                9: 35.65,
                10: 38.50
            }
        ]
        let tmpText = `
        <tr>
            <td class="tdname">${tmpObj['name']}</td>
            <td class="td1">${tmpObj[1].sum}</td>
            <td class="td2">${tmpObj[2].sum}</td>
            <td class="td3">${tmpObj[3].sum}</td>
            <td class="td4">${tmpObj[4].sum}</td>
            <td class="td5">${tmpObj[5].sum}</td>
            <td class="td6">${tmpObj[6].sum}</td>
            <td class="td7">${tmpObj[7].sum}</td>
            <td class="td8">${tmpObj[8].sum}</td>
            <td class="td9">${tmpObj[9].sum}</td>
            <td class="td10">${tmpObj[10].sum}</td>
        </tr>
    `;
        myTbody.append(tmpText);

        // 顯示第二年的數據
        let secondYearData = myArr[1]; // 這是第二年的數據

        let secondYearText = `
        <tr>
            <td class="tdname">第${secondYearData['name']}年</td>
            <td class="td1">${secondYearData[1]}</td>
            <td class="td2">${secondYearData[2]}</td>
            <td class="td3">${secondYearData[3]}</td>
            <td class="td4">${secondYearData[4]}</td>
            <td class="td5">${secondYearData[5]}</td>
            <td class="td6">${secondYearData[6]}</td>
            <td class="td7">${secondYearData[7]}</td>
            <td class="td8">${secondYearData[8]}</td>
            <td class="td9">${secondYearData[9]}</td>
            <td class="td10">${secondYearData[10]}</td>
        </tr>
    `;
        myTbody.append(secondYearText);
    });
    </script>
</body>

</html>