<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Rows will be added here dynamically -->
            </tbody>
        </table>
    </div>

    <script>
    let myObj = [{
            'id': '1',
            'name': '台北店',
            'mobile': '0911',
            'address': '台北市中正路1號'
        },
        {
            'id': '2',
            'name': '台中店',
            'mobile': '0922',
            'address': '台中市中正路2號'
        },
        {
            'id': '3',
            'name': '高雄店',
            'mobile': '0933',
            'address': '高雄市中正路3號'
        },
    ];

    // Function to append rows to the table using native JavaScript
    function populateTable(data) {
        const tbody = document.getElementById('table-body');
        data.forEach(entry => {
            const row = document.createElement('tr');

            const cellId = document.createElement('td');
            cellId.textContent = entry.id;
            row.appendChild(cellId);

            const cellName = document.createElement('td');
            cellName.textContent = entry.name;
            row.appendChild(cellName);

            const cellMobile = document.createElement('td');
            cellMobile.textContent = entry.mobile;
            row.appendChild(cellMobile);

            const cellAddress = document.createElement('td');
            cellAddress.textContent = entry.address;
            row.appendChild(cellAddress);

            tbody.appendChild(row);
        });
    }

    // Call the function to populate the table with data
    populateTable(myObj);
    </script>
</body>

</html>