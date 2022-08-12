const conectarApi = async() => {
    const respuesta = await fetch('https://jsonplaceholder.typicode.com/users');
    
    console.log(respuesta);

    const datos = await respuesta.json();
    console.log(datos);
}

conectarApi();