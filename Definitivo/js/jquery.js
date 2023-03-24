function obtenerUsuarios(){
	let url = `../api/api.php`;
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
}




function editaUsuario(id){
	//console.log(id);
	const idd = id;
	let url = `../api/api.php`;
	console.log(idd);
	window.open('editaUsuario.php?id='+idd,'_self');
	
}

function borrarUsuario(id){
	//console.log(id);
	const idd = id;
	let url = `../api/api.php`;
	const xhr = new XMLHttpRequest();
	xhr.open('DELETE', url+"/?id="+idd, true);
	xhr.send();
	obtenerUsuarios();
}


obtenerUsuarios();





document.getElementById("registrar_registro").addEventListener('click',function(e){ //crea el evento al hacer click en el boton con id="Search"
	e.preventDefault();
	let url = `../api/api.php`;
	const user = document.getElementById('usuario_registro').value;
	const email = document.getElementById('email_registro').value;
	const pass = document.getElementById('password_registro').value;

	const xhr = new XMLHttpRequest();
	
	xhr.open('POST', url, true);
	
	//console.log(user+email+pass);
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	xhr.send('usuario='+encodeURIComponent(user)+'&email='+encodeURIComponent(email)+'&password='+encodeURIComponent(pass));

	
	obtenerUsuarios();
	document.getElementById("form-register").reset();
});



