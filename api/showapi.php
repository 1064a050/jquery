<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>


<form action="./get_api.php" id="myForm">

    </form>
    <div class="container mt-5">
        <h2 class="text-center">Cors Get Data</h2>
        <div class="row">
       
        <div class="col-12">
            <button id="myBtn" type="button" class="btn btn-info btn-sm btn-block">Get Data</button>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        // alert('12345');
        $('#myBtn').click(function(e) {            
            // console.log('111');
            // e.preventDefault();

            // var form = $(this);
            // var url = form.attr('action');
            // var url = 'https://data.ntpc.gov.tw/api/datasets/E09B35A5-A738-48CC-B0F5-570B67AD9C78/json/preview';
            // var url = 'https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=1000';
            var url = './get_api.php';

            $.ajax({
                type: "post",
                url: url,
                // data: form.serialize(),
                dataType  : 'json',
                success:function(data){
                    console.log(typeof(data));
                    console.log(data);
                }
            });
        });

    });

  
    </script>
</body>

</html>