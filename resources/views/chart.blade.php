<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" ></script>
</head>
<body>
<div style="height: 800px; width: 800px; margin:auto;">
    <canvas id="barChart"></canvas>
</div>
<script>
    $(function(){
       var datas = <?php echo json_encode($datas);?> ;
       var username = <?php echo json_encode($username);?>;
     var barCanvas = $("#barChart");
     
    var barChart = new Chart(barCanvas,
        {
        type:'radar',
        data:{
            labels:['O\'zbekistonning eng yangi tarixi','Umumhuquqiy bilimlari','Tahliliy fikrlash qobilyati','Kirishimlilik darajasi','Umumiy psixodiagnostikasi','Kompyuter savodxonligi ','Intellektual darajasi (IQ)','Umumiy dunyoqarashi'],

            datasets:[
                {
                    label:username.name+'ning kompetensiya diagnostikasi natijalari "Radar Diagrammasi"',
                    data:datas,
                    backgroundColor:'rgb(255, 99, 132,0.6)',
                    // backgroundColor:['black','orange','yellow','green','blue','indigo','violet','purple','pink','black','gold','brown'],
                    borderColor:'red',
                    borderWidth:3,

                }
            ]
        },
        options:{
            scale: {
                min: 0,
                max: 10,
                stepSize:1,
            },
            scales:{

                yAxes:[
                    {
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max:10,
                            userCallback: function(label, index, labels) {
                                // when the floored value is the same as the value we have a whole number
                                if (Math.floor(label) === label) {
                                    return label;
                                }
                            },


                        }
                    }
                ]
            }
        }
    });
    })
</script>
</body>
</html>
