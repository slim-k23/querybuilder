{"filter":false,"title":"2020_03_24_100505_add_categorie_to_produits.php","tooltip":"/database/migrations/2020_03_24_100505_add_categorie_to_produits.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":80},"end":{"row":17,"column":80},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"3cafbbc341faec8353d9269710ee65e1bbaa5f50","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":16,"column":12},"end":{"row":16,"column":14},"action":"remove","lines":["//"],"id":2},{"start":{"row":16,"column":12},"end":{"row":18,"column":80},"action":"insert","lines":[" $table->unsignedBigInteger('categorie_id');","","            $table->foreign('categorie_id')->references('id')->on('categories');"]}],[{"start":{"row":16,"column":56},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":3,"ignore":true}]]},"timestamp":1585046306407}