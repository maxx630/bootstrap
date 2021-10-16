<?php
// Recupero i valori inseriti nel form


// compilo un messaggio combinando i dati recuperati dal form
$testo = "Nome: " . $nome . "\n"
       . "Tel: " . $tel . "\n"
         . "Email: " . $email . "\n"
    

// uso la funzione mail di PHP per inviare questi dati al mio indirizzo di posta
email('ismaeljadir@email.com', 'Messaggio dal mio sito web', $testo);

print "<body>
<table align='center' bordercolor='#CCCCCC'>
  <tr>
    <td>
<div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>
Grazie per averci contattato</font><br><br>
Uno dei nostri consulenti le risponderà al più presto all'indirizzo $email<br><br>		
Per tornare all'Home attendi 5 secondi o <a href='https://www.webdevelopers.altervista.org/'>Clicca qui</a></font></div></td>
<meta http-equiv='refresh' content='$delay;  url=$url'>
</tr>
</table>
</body>";
}

?>