function editaUsuarioId(id){
	const idd = ;
	let url = `../api/api.php`;

	document.getElementById('resultEdit').innerHTML = idd;





	/*
	const xhr = new XMLHttpRequest();
	xhr.open('GET', url, true);
	xhr.send();
	
	xhr.onreadystatechange = function(){
		if(this.status == 200 && this.readyState == 4){
			//console.log(this.responseText);
			let datos = JSON.parse(this.responseText);
			//console.log(datos);
			
			const filaTabla = document.getElementById('tabla_usuarios_register');
			filaTabla.innerHTML='';		

			for(let i = 0; i<datos.length;i++){
				filaTabla.innerHTML+=`
					<tr>
						<td class="col-md-2" >${datos[i].id}</td>
						<td class="col-md-2" >${datos[i].usuario}</td>
						<td class="col-md-2" >${datos[i].email}</td>
						<td >
							<a class="btn btn-secondary py-2 mt-1" onclick="editaUsuario(${datos[i].id});" href="#" >Editar</a>
						</td>
						<td >
							<a class="btn btn-danger py-2 mt-1" onclick="borrarUsuario(${datos[i].id});" href="#" >Eliminar</a>
						</td>
					</tr>
				`
			}


		}
	}
	*/
}