Op de pagina 1a.php staat een formulier met twee invoervelden. Eentje voor de naam en eentje voor het aantal fouten. Maak een php-pagina 1a_process.php die de ingevoerde waarden weergeeft.
Voeg daar ook een link “Terug naar formulier” toe.
<form method="POST" action="">
    Naam: <br><input type="text" name="naam" autofocus required><br>
    Aantal fouten: <br><input type="number" name="fouten" required><br>
    <input type="submit">
</form>