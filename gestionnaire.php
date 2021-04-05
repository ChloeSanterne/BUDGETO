<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style.css">
    <link rel="stylesheet" href="Public/Css/all.css">
    
    <title>Gestionnaire de budget</title>
</head>

<body>
    <header>
<?php include_once "header.php"; ?>
    </header>
    <section>
        <div class="choose">
            <div class="prec"> <i class="fas fa-arrow-circle-left"></i></div>
            <div class="month">
                Janvier
            </div>
            <div class="suivant"><i class="fas fa-arrow-circle-right"></i></div>
        </div>

        <div class="enter">
            <div class="revenu">
                Revenus
            </div>
            <div class="cases">
                <input type="number" min = 0 placeholder="Salaire" class="salaires">
                <input type="number" min = 0 placeholder="Salaire" class="salaires">
                <input type="number" min = 0 placeholder="Allocations" class="salaires">
                <input type="number" min = 0 placeholder="Revenus divers" class="salaires">
                <button type="submit" class="ajouter"> Ajouter</button>
            </div>
            <div class="totalR">
                Total des revenus : <span class="TR">€</span>
            </div>
        </div>

        <div class="enter">
            <div class="depensesF">
                Dépenses Fixes
            </div>
            <div class="cases ">
                <input type="number" min = 0 placeholder="Loyer" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Assurance Maison" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Emprunt Voiture" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Assurance Voiture" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Eau" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Electricité" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Gaz" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Internet" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Netflix" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Forfait téléphone " class="DepensesFixes">
                <input type="number" min = 0 placeholder="Forfait téléphone " class="DepensesFixes">
                <input type="number" min = 0 placeholder="Abonnement musical" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Mutuelle" class="DepensesFixes">
                <input type="number" min = 0 placeholder="Abonnement Sportif"class="DepensesFixes">
                <input type="number" min = 0 placeholder="Emprunt" class="DepensesFixes"> <br>
                <button type="submit" class="btnDF"> Ajouter</button>
            </div>
            <div class="totalD">
                Total des dépenses fixes : <span class="TD">X</span>
            </div>
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </div>
        <div class="enter">
            <div class="Depenses">
                Dépenses 
            </div>
            <div class="cases">
                <input type="date"> 
                <input type="text" placeholder="Lieu" id="lieu" class="Lieu"> 
                <input type="number" min = 0 placeholder="0" id="number" class="Achats">
                <input type="number" min = 0 placeholder="0" id="number" class="Achats">
                <button type="submit" class="btnA"> Ajouter</button>
            </div>
            <div class="totalR">
                Total des dépenses du mois: <span class="TDM">X</span>
            </div>
            <div class ="AchatsOk">
                <ul class="AchatsList"></ul>
            </div>
        </div>
    </section>
    <!--Load the AJAX API-->
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Depenses');
        data.addColumn('number', 'Reste à vivre');
        data.addRows([
            ['Dépenses Fixes', 3],
            ['Reste à Vivre', 1],
        ]);

        // Set chart options
        var options = {
            'title': 'Pourcentage Reste à vivre / Dépenses Fixes',
            'width': 400,
            'height': 300,
            slices: {
                0: {
                    color: '#17a2b8'
                },
                1: {
                    color: 'rgb(68,67,67)'
                }
            }
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
<script src="Public/Js/script.js"></script>
</body>

</html>