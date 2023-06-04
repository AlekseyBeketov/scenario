function randfilm(){
    let mas = ["./inside.html", "./john.html", "./k_tebe.html","./cheb.html",
    "./father.html", "./life.html", "./inter.html","./list.html",
    "./king_joke.html", "./better_call_saul.html", "./black.html","./brigada.html"];
    function randik(a,b){
        return Math.random()*(b-a)+a;
    }
    
    let link="./news.html";
    let a = randik(0,mas.length);
    let b= Math.round(a);

    link=mas[b];

    window.location.href = link;
    
}

