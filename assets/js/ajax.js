
let i = 4;



document.querySelector('#ajax').addEventListener("click",async() => {
    try{
        console.log('Avant le fetch');
        const response = await fetch('/assets/php/server.php?i='+ i);
        i+=2;
        console.log('apres fetch');
        let datajson = await response.text();

        let datadec = JSON.parse(datajson);
        console.log(datadec);

        let areaprojets = document.querySelector('#projets');
        let button = document.querySelector('#ajax');

        if (datadec.length != 0){

            for(const proj of datadec){

            let newdiv = document.createElement('div');
            let newimg = document.createElement('img');
            let newsec = document.createElement('section');
            let newh3 = document.createElement('h3');
            let newp = document.createElement('p');

            areaprojets.appendChild(newdiv);
            newdiv.appendChild(newimg);
            newdiv.appendChild(newsec);
            newsec.appendChild(newh3);
            newsec.appendChild(newp);
            

            newimg.src = "/assets/img/blend2.png"
            newimg.alt = "Logo du logiciel Blender"
            newh3.innerText = proj['Title'];
            newp.innerText = proj['Description'];

            }
        }

        else{
            button.innerHTML = "No more Projects";
        }
    } 

    catch (error) {
        console.log(error)
    }
})

