// api connection
const conectarApi = async() => {
    const respuesta = await fetch('https://jsonplaceholder.typicode.com/users');
    
    console.log(respuesta);

    const datos = await respuesta.json();
    console.log(datos);

    let usuarios = '';
    datos.forEach(usuario => {
        usuarios = usuarios + `<h1>${usuario.name}</h1>`;
        usuarios = usuarios + `<h1>${usuario.email}</h1>`;
    });

    document.getElementById('js').innerHTML = usuarios;
}

conectarApi();