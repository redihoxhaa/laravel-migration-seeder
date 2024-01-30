# Treni DB Laravel

#### CONSEGNA DELL'ESERCIZIO 

```
Creiamo una tabella trains e relativa Migration

Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto

Inserite inizialmente i dati tramite PhpMyAdmin.

Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.
```

#### SVOLGIMENTO

Dopo aver capito a cosa servono Controller e Model, approfondiamo l'argomento delle Migration, con le quali andiamo a
creare, aggiornare, cancellare tabelle nel nostro DB. In questo esercizio abbiamo creato due migration, una per creare e una per aggiungere una colonna alla tabella **Trains** nel nostro trains_db. Successivamente con il metodo where() abbiamo reso possibili, oltre a far vedere tutti treni disponibili, anche una route che rimanda ad una paginam dove abbiamo filtrato solo i treni con partenza odierna.