<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main id="app">
    <div class="header">
        <label for="text">Cerca per Marca o Carburante:</label>
        <input type="text" v-model="text" @keyup.enter="filter">
    </div>
    <ul class="bg" v-for="car in cars">
        <li><h2>Marca: {{car.marca}}</h2></li>
        <li><h3>Modello: {{car.modello}}</h3></li>
        <li><p>Targa: {{car.targa}}</p></li>
        <li><p>Anno: {{car.anno}}</p></li>
        <li><p>Cilindrata: {{car.cilindrata}}</p></li>
        <li><p>Carburante: {{car.carburante}}</p></li>
        <li><p>Versione: {{car.versione}}</p></li>
        <li><p>Numero di Telaio: {{car.telaio}}</p></li>
        <li><p>Numero Porte: {{car.porte}}</p></li>
        <li><p>Posti: {{car.posti}}</p></li>
        <li><p>Chilometri: {{car.chilometri}}</p></li>
        <li><p>Precedenti proprietari: {{car.proprietari}}</p></li>
        <li><p>Tagliandi effettuati: {{car.tagliandi}}</p></li>
        <li><p>Revisioni: {{car.revisioni}}</p></li>
        <li><p>Colore: {{car.colore}}</p></li>
        <li><img :src="car.immagine" alt="car.modello" ></li>
        <li><p>Prezzo: {{car.prezzo}} €</p></li>
    </ul>       
</main>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
</body>
</html>