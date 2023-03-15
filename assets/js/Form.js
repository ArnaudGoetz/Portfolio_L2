
document.addEventListener('DOMContentLoaded', function() {
    
    var formPost = document.querySelector('#PostForm');
    var nom = document.querySelector('#nom');
    var type = document.querySelector('#type');
    var description = document.querySelector('#desc');
    var message = document.querySelector('#message');

    var formGet = document.querySelector('#GetForm');
    var messErreur = document.querySelector('#MessErreur');
    var Text = document.querySelector('#Research');

    // FORM POST

    function validerFormulairePost(event) {
        
        event.preventDefault();

        if (nom.value.trim() === '' || type.value.trim() === '' || description.value.trim() === '') {
            message.innerHTML = 'Veuillez remplir tous les champs.';
            return;
        }

        if (description.value.length > 500) {
            message.innerHTML = 'Le champ description ne doit pas contenir plus de 500 caractères.';
            return;
        }

        message.innerHTML = '';
        formPost.submit();
    }


    // FORM GET

    function validerFormulaireGet(event) {
        
        event.preventDefault();

        if (Text.value.trim() === '') {
            messErreur.innerHTML = 'Veuillez remplir le champ de recherche';
            return;
        }

        if (Text.value.length > 50) {
            messErreur.innerHTML = 'Le champ derecherche ne doit pas contenir plus de 50 caractères.';
            return;
        }

        messErreur.innerHTML = '';
        formGet.submit();
    }


    formPost.addEventListener('submit', validerFormulairePost);
    formGet.addEventListener('submit',validerFormulaireGet);
});


