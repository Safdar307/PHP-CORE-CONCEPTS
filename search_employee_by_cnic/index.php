<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        h1{
            background-color: Black;
            color: red;
            font-family: cursive;
        }
    </style>


    <script>

        function searchEmployee()
        {
            let cnic = document.getElementById("cnic").value;

            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function()
            {
                if(xhr.readyState == 4 && xhr.status == 200)
                {
                    document.getElementById("result").innerHTML =
                    xhr.responseText;
                }
            }

            xhr.open("GET","search_employee.php?cnic="+cnic,true);

            xhr.send();
        }

    </script>

</head>
<body>

    <center>

        <h1>Search Employee By CNIC</h1>

        <input type="text" id="cnic" placeholder="Enter CNIC">

        <button onclick="searchEmployee()"> Search </button>

        <br><br>

        <div id="result"></div>

    </center>

</body>
</html>