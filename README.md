# Laravel Model Controller

1 - Create un model Movie
**php artisan make:model Movie**
2 - Create un controller che gestirà la rotta **/**
**php artisan make:controller Guest/PageController**
3 - All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
**BONUS:**
4 - Create altre rotte filtrando i dati come preferite
5 - Create una pagina di dettaglio. La pagina di dettaglio riceve dinamicamente l’ID del movie, esegue la query in base all’ID ricevuto e stampa il singolo elemento. Il link alla pagina di dettaglio sarà presente nell’elenco dei film
