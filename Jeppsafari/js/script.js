var homeButtonEl = document.getElementById('index');
var faqButtonEl = document.getElementById('faq');
var indexTextEl = document.querySelectorAll('.indextext');
var faqTextEl = document.querySelectorAll('.faqtext')

// homeButtonEl.addEventListener('click', function(e){
//     document.body.style.backgroundImage = "url('img/jeepmud.jpg')"
//     console.log("mjau");
//     document.indexTextEl.style.display = "block";
// })
// faqButtonEl.addEventListener('click', function(e){
//     document.body.style.backgroundImage = "url('img/jeepobby.jpg')"
//     console.log("rawr");
//     document.indexTextEl.style.display = "none";

// })
console.log(faqTextEl);
// Skjuler elementene som skal være på faq-sida
for (let i = 0; i < faqTextEl.length; i++) {
    faqTextEl[i].style.display = "none";
}

/*
for (let index = 0; index < faqTextEl.length; index++) {
    console.log(index);
    
}
console.log("rawr");
*/
homeButtonEl.addEventListener('click', pageChange);
faqButtonEl.addEventListener('click', pageChange);

function pageChange(e){
    console.log("running function pageChange");
    //Bytter om mellom de to fanene på siden. Bytter mellom tekst
    console.log(e);
    if(e.target.id === 'faq'){
        document.body.style.backgroundImage = "url('img/jeepobby.jpg')"
        console.log("rawr");
        faqButtonEl.classList.add('active');
        homeButtonEl.classList.remove('active');
        for (let i = 0; i < indexTextEl.length; i++) {
            indexTextEl[i].style.display = "none";
        }
        for (let i = 0; i < faqTextEl.length; i++) {
            faqTextEl[i].style.display = "block";
        }
    }
    else{
        document.body.style.backgroundImage = "url('img/jeepmud.jpg')"
        console.log("mjau");
        faqButtonEl.classList.remove('active');
        homeButtonEl.classList.add('active');
        for (let i = 0; i < indexTextEl.length; i++) {
            indexTextEl[i].style.display = "block";
        }
        for (let i = 0; i < faqTextEl.length; i++) {
            faqTextEl[i].style.display = "none";
        }
    }
}

