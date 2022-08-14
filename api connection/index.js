// api connection
const conectarApi = async() => {
    const respuesta = await fetch('http://localhost:3000/bandidos');
    
    console.log(respuesta);

    const datos = await respuesta.json();
    console.log(datos);

    let usuarios = '';
    datos.forEach(usuario => {
        usuarios += `<h4>${usuario.id}</h4>`;
        usuarios += `<h1>${usuario.name}</h1>`;
        usuarios += `<h1>${usuario.username}</h1>`;
        // usuarios += `<h1>${usuario.website}</h1>`;
    });

    document.getElementById('js').innerHTML = usuarios;
}

conectarApi();