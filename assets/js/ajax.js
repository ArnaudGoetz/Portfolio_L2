
let i = 0;

document.querySelector('button').addEventListener("click",async() => {
    try{
        console.log('Avant le fetch')
        const response = await fetch('/assets/php/server.php?i='+ i++)
        console.log('Après le fetch')
    } 
    catch (error) {
        console.log(error)
    }
})

