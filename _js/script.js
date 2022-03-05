const tbody = document.querySelector(".listarcliente");
const cadForm = document.getElementById("new-client");

async function listarUsuarios(pagina) {
    const dadoslistcliente = await fetch("./listar.php?pagina=" + pagina);
    const resposta = await dadoslistcliente.text();
    tbody.innerHTML = resposta;
}

listarUsuarios(1);

