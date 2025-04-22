# Kodu ülesanne 

See on lihtne veebileht, mis pole loomulikut teab mis asjalik, funktsionaalne või veel vähem turvaline. Aga see leht töötab, kõik mis on siin olemas. Kloonige projekt enda arvutisse ja vaadake, mis sellel lehel toimub ja kuidas töötab. Kogu "info" on koodis olemas. 

# Ülesanne

1. Loo uus andmebaas
2. Loo uus tabel vastavalt feedback.csv sisule
3. Kasuta andmebaasi ühenduseks [mysqli](https://www.php.net/manual/en/book.mysqli.php) või [PDO](https://www.php.net/manual/en/pdo.connections.php) prepare lahendust. Proovi luua klass, nagu tunnis tegime. Vihjeks Python ja SQLite ühendus.
4. Kontakt lehelt saadetav info tuleb lisada andmebaasi tabelisse mille sa eelpool tegid. Lisaks kirjutab ka csv faili. Olemasolevat csv faili sisu **ei pea** andmebaasi tabelisse lisama.
5. Admin leht **peab näitama** andmebaasist saadavat infot ja sorteeritud peab olema kuupäeva järgi. Kuupäevad veebilehel on vastavalt eesti keelele.
6. Tagasiside kirjeid peab saama ka kustutada! Muutmist **EI OLE** vaja teha, sest see on "kliendi" kommentaar. Ainult admin peab saama seda teha!

## Lisa
- Proovi logimine teha sessiooni põhiseks. Ainult parooliga.

# GitHub
Kuna õpetaja GitHubi osa jääb külge, siis Visual Code'is Terminalis anna käsklus 
```
git remote remove origin
```
sest õpetaja githubi ilma kutseta lisada ei saa, selle asemel peab olmea teie enda oma. Sellega kaob ära teil Source Control juures värviline pilve ikoon aga sinine **main** jääb alles, mis on lokaalne git.

# Tegija tegemised

Siia palun tee loetelu kõikidest asjadest mida sa tegid. Järjekord pole oluline.
* Tegevus
Tegin andmebaasi ja tabeli vastavalt feedback.csv struktuurile.

Klassipõhine andmebaasiühendus. Tegin Database.php faili, mille kaudu toimub kogu andmebaasi suhtlus.

Kontaktilehe vormi loomine Bootstrap 5 abil, millelt saadetud andmed valideeritakse ja saadetakse submit_feedback.php kaudu.

Andmete salvestamine korraga kahte kohta. Andmebaasi, kasutades mysqli prepare lahendust ning CSV faili lisades iga tagasiside uue reale.

Järgmiseks tegin admin.php, mis  kuvab tagasisidekirjed andmebaasist, sorteeritult kuupäeva järgi uuemad eespool.

Kuupäevad tegin nii, et need kuvatakse eesti formaadis.

Iga kirje juures on kustutamise nupp, mis eemaldab andmebaasist vastava rea.

delete.php fail tagasiside kustutamiseks turvaliselt POST-meetodil.

Sessioonipõhine sisselogimine (login.php) ainult parooliga. Kui kasutaja pole sisse loginud, siis admin.php suunab ta login.php lehele.

Testitud kontaktivormi toimimine – andmed salvestuvad, valideerimine töötab ja kõik kuvatakse adminile korrektselt.

