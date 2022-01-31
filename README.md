"# shoppingCart" 

Kapott feladat:
Próbafeladat (yii)
Készíts el egy egyszerű webáruház kosár-osztályt! (Nem szükséges egyéb
kiegészítés, tehát felhasználókezelés, vagy más osztály készítése nem
része a feladatnak.)
A kosárhoz lehessen hozzáadni termékeket (név, ár, akciós (igen/nem)
adatok elegendőek).
A kosárnak legyen megadható százalékos kedvezmény (mert pl. a
felhasználó jogosult 10% általános kedvezményre). Az akciós termékekre
ne legyen érvényes a százalékos kedvezmény.
A kosárnak lehessen lekérdezni a kosárértékét (a kosárban lévő termékek
összértéke), valamint lehessen lekérdezni a végösszeget (kosárérték -
kedvezmény).
A kosárból lehessen kivenni terméket.

A demózáshoz készíts egy minimális felületet, ahol be lehet pakolni a
kosárba terméket (név, ár, "akciós igen/nem", "hány darab kerüljön a
kosárba" adatok megadásával), legyen megadható a kosárra vonatkozó
százalékos kedvezmény, és a felületen legyen látható a kosárérték
valamint a végösszeg (illetve a hozzáadott tételek, amiket lehessen
törölni).

Telepítés:
1. git clone https://github.com/Juhist/shoppingCart.git
2. cd shoppingCart
3. Adatbázis import: yiibasic.sql
4. cd shoppingcart
5. composer install
6. php yii serve
7. Kezdő oldal megnyitása http://localhost:8080/index.php
8. Felületen a kosár tartalmának szerkesztése (felvitel, módosítás, törlés)
9. Véglegesítés után a kedvezmények megadása (%-os kzdvezmény (csak nem akciós termékekre), ezt követő egyéb levonandó összeg (utalvány, egyenleg, stb))
10. Kosár tartalmának és a levont kedvezmények utáni összeg megjelenítése