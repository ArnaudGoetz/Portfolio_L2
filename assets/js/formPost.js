
document.addEventListener('DOMContentLoaded', function() {
    
    var form = document.querySelector('#PostForm');
    var nom = document.querySelector('#nom');
    var type = document.querySelector('#type');
    var description = document.querySelector('#desc');
    var message = document.querySelector('#message');

    
    function validerFormulaire(event) {
        
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
        form.submit();
    }

    form.addEventListener('submit', validerFormulaire);
});


