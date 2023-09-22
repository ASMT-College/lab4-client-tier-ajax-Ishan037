<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Search for List of Gods:
    <input type="text" name="god" id="god" oninput="get_data_using_ajax()">

    <div id="god_result"></div>
    <script>
        function get_data_using_ajax() {
            var q= document.getElementById('god').value
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {//200 for success
                    document.getElementById('god_result').innerHTML=this.responseText
                    console.log(this.responseText);
                }
            }
            xmlhttp.open("GET", "ajax_server.php?search=" + q, true);
            xmlhttp.send();//Ajax syntax
        }
    </script>
</body>

</html>