var xhr = new XMLHttpRequest();
var xhr2 = new XMLHttpRequest();
var xhr3 = new XMLHttpRequest();
var xhr4 = new XMLHttpRequest();
var xhr5 = new XMLHttpRequest();
var xhr6 = new XMLHttpRequest();

var search_couverture = {
    
  "ApiKey": "c1967033-bf6d-4610-93e1-2e3891be449f",
  "SearchRequest": {
    "Keyword": "couverture survie",
    "SortBy": "rating",
    "Pagination": {
      "ItemsPerPage": 1,
      "PageNumber": 1
    },
    "Filters": {
      "Price": {
        "Min": 1,
        "Max": 50
      },
      "Navigation": "all",
      "IncludeMarketPlace": false
    }
  }
}

var search_kit_survie = {
  "ApiKey": "c1967033-bf6d-4610-93e1-2e3891be449f",
  "SearchRequest": {
    "Keyword": "couverture survie",
    "SortBy": "rating",
    "Pagination": {
      "ItemsPerPage": 4,
      "PageNumber": 1
    },
    "Filters": {
      "Price": {
        "Min": 0,
        "Max": 0
      },
      "Navigation": "all",
      "IncludeMarketPlace": true
    }
  }
}

var search_purificateur = {
  "ApiKey": "c1967033-bf6d-4610-93e1-2e3891be449f",
  "SearchRequest": {
    "Keyword": "purificateur d eau",
    "SortBy": "rating",
    "Pagination": {
      "ItemsPerPage": 4,
      "PageNumber": 1
    },
    "Filters": {
      "Price": {
        "Min": 0,
        "Max": 0
      },
      "Navigation": "all",
      "IncludeMarketPlace": true
    }
  }
}

var sample = {
  "ApiKey": "c1967033-bf6d-4610-93e1-2e3891be449f",
  "PushToCartRequest": {
    "OfferId": "fincpangfirrnoir",
    "ProductId": "fincpangfirrnoir",
    "Quantity": 1,
    "SellerId": "0"
  }
}


/* Code pour Recherché un produit */
function Search_Couv(search_couverture){
    var stock,lien;
    xhr.open("POST", "https://api.cdiscount.com/OpenApi/json/Search", true);
    xhr.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr.send(JSON.stringify(search_couverture));

    xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone


            if (xhr.readyState === 4 && xhr.status==200 ) { // Si le fichier est chargé 
                search_couverture=xhr.responseText
                search_couverture=JSON.parse(search_couverture);
                console.log(search_couverture.Products[0].MainImageUrl);
                lien=search_couverture.Products[0].MainImageUrl;
                stock=document.getElementById('1a');
                stock.setAttribute('src',lien);
            }


        }, false);
    
}

function Search_kit(search_kit_survie){
    var stock,lien;
    xhr2.open("POST", "https://api.cdiscount.com/OpenApi/json/Search", true);
    xhr2.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr2.send(JSON.stringify(search_kit_survie));
    xhr2.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone


            if (xhr2.readyState === 4 && xhr2.status==200 ) { // Si le fichier est chargé 
                search_kit_survie=xhr2.responseText
                search_kit_survie=JSON.parse(search_kit_survie);
                console.log(search_kit_survie.Products[0].MainImageUrl);

                lien=search_kit_survie.Products[0].MainImageUrl;
                stock=document.getElementById('2a');
                stock.setAttribute('src',lien);
            }


        }, false);
    
}

function Search_Purificateur(search_purificateur){
    var stock,lien;
    xhr3.open("POST", "https://api.cdiscount.com/OpenApi/json/Search", true);
    xhr3.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr3.send(JSON.stringify(search_purificateur));
    xhr3.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone


            if (xhr3.readyState === 4 && xhr3.status==200 ) { // Si le fichier est chargé 
                search_purificateur=xhr3.responseText
                search_purificateur=JSON.parse(search_purificateur);
                console.log(search_purificateur.Products[0].MainImageUrl);
                lien=search_purificateur.Products[3].MainImageUrl;
                stock=document.getElementById('3a');
                stock.setAttribute('src',lien);
            }


        }, false);
    
}

function PushToCart_1(){
    xhr4.open("POST", "https://api.cdiscount.com/OpenApi/json/PushToCart ", true);
    xhr4.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr4.send(JSON.stringify(sample));

    xhr4.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone

            if (xhr4.readyState === 4 && xhr4.status==200 ) { // Si le fichier est chargé 
                sample=xhr4.responseText;
                sample=JSON.parse(sample);
                console.log(sample.CheckoutUrl);
                var lien=sample.CheckoutUrl;
                var temp=document.getElementById('lia1');
                temp.setAttribute('href',lien);
                console.log(temp,lien);

            }


        }, false);
    
    
}

function PushToCart_2(){
    var lien,temp;
    xhr5.open("POST", "https://api.cdiscount.com/OpenApi/json/PushToCart ", true);
    xhr5.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr5.send(JSON.stringify(sample));

    xhr5.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone

            if (xhr5.readyState === 4 && xhr5.status==200 ) { // Si le fichier est chargé 
                sample=xhr5.responseText;
                sample=JSON.parse(sample);
                console.log(sample.CheckoutUrl);
                lien=sample.CheckoutUrl;
                temp=document.getElementById("lia2");
                temp.href=lien;

            }


        }, false);
    
    
}

function PushToCart_3(){
    var lien,temp;
    xhr6.open("POST", "https://api.cdiscount.com/OpenApi/json/PushToCart ", true);
    xhr6.setRequestHeader("Content-Type","application/json; charset=UTF-8");
    xhr6.send(JSON.stringify(sample));

    xhr6.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone

            if (xhr6.readyState === 4 && xhr6.status==200 ) { // Si le fichier est chargé 
                sample=xhr6.responseText;
                sample=JSON.parse(sample);
                console.log(sample.CheckoutUrl);
                lien=sample.CheckoutUrl;
                temp=document.getElementById("lia3");
                temp.href=lien;

            }


        }, false);
    
    
}

Search_Purificateur(search_purificateur);
Search_Couv(search_couverture);
Search_kit(search_kit_survie);
PushToCart_1();
PushToCart_2();
PushToCart_3();
                           
