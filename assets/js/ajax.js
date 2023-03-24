
let i = 4;

document.querySelector('button').addEventListener("click",async() => {
    try{
        console.log('Avant le fetch');
        const response = await fetch('/assets/php/server.php?i='+ i);
        i+=2;
        console.log('apres fetch');
        let datajson = await response.text();
        let datadec = JSON.parse(datajson);
        console.log(datadec);

        var areaprojets = document.querySelector('#projets');

        for(const proj of datadec){

            var newdiv = document.createElement('div');
            var newimg = document.createElement('img');
            var newsec = document.createElement('section');
            var newh3 = document.createElement('h3');
            var newp = document.createElement('p');

            areaprojets.appendChild(newdiv);
            newdiv.appendChild(newimg);
            newdiv.appendChild(newsec);
            newsec.appendChild(newh3);
            newsec.appendChild(newp);
            

            newimg.src = "/assets/img/blend2.png"
            newimg.alt = "Logo Blender"
            newh3.innerText = proj['Title'];
            newp.innerText = proj['Description'];

        }
        
    } 

    catch (error) {
        console.log(error)
    }
})

