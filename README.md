Full Stack Ticket Platform


📚 📑 **Consegna** 
Realizziamo un’applicazione in Laravel che visualizza e permette di gestire e ricercare in maniera interattiva dei Ticket di supporto.
E’ prevista una sola tipologia di utente: admin. L’admin ha accesso alla lista degli operatori, dei ticket e delle relative categorie.

Sui ticket sono possibili le seguenti operazioni: creazione, aggiornamento dello stato e assegnazione ad un operatore. Un ticket deve essere obbligatoriamente assegnato ad un operatore **disponibile** in fase di creazione.

Per questa fase non è prevista alcuna visualizzazione avanzata dei ticket se non una semplice lista.



1 lettura e analisi della consegna;
2 individuazione delle risorse:
    a utente/admin;
    b operatori;
    c ticket;
    d categorie di ticket.
3 stabilire le relazioni tra le risorse;
4 disegnare il diagramma E/R;
5 creare un sistema di registrazione/accesso (già fatto con Laravel breeze);
6 creare un seeder o delle factories per popolare il database;
7 creare il modello e il resource controller;
8 scrivere le azioni nel controller;
9 scrivere le rotte (ricordare di importare il namespace del controller);
10 creare una vista index per mostrare i ticket;
11 creare un form per la creazione e per l'aggiornamento dei ticket (ricordare l'assegnazione all'operatore disponibile);
