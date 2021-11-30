 
const btnObtener = document.getElementById('llamarAPI');

const obtenerNombreLista = () =>{

    axios.get('https://api.trello.com/1/boards/615e121e55742a5a6ba346bc/lists/?key=8b326737f43e5a629e80b9c95b0a6016&token=fcd44ca66295583ff083eb88f93ef882c4836355b6edce681b2b9fc631c15517')
    .then(response => {
        
        $('#tituloLista').text(response.data[0].name);
        
    });
    
    obtenerNombreFicha();
};
const obtenerNombreFicha = () =>{

    axios.get('https://api.trello.com/1/boards/615e121e55742a5a6ba346bc/cards?key=8b326737f43e5a629e80b9c95b0a6016&token=fcd44ca66295583ff083eb88f93ef882c4836355b6edce681b2b9fc631c15517')
    .then(function(response) {
        
        $('#tituloCard').text(response.data[0].name);
        $('#descCard').text(response.data[0].desc);
    });
};

btnObtener.addEventListener('click',obtenerNombreLista);