<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dando estilo a tablas</title>

	<link rel="stylesheet" >
</head>
<body>
	<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Nombre</th><th>Numero</th><th>Email</th>
				</tr>
			</thead>

			<tr>
				<td>jonas</td><td>789546465465</td><td><input type="email" placeholder="Escribe tu correo aquí."/> </td>
			</tr>
			<tr>
				<td>jhon</td><td>78565655465</td><td><input type="email" placeholder="Escribe tu correo aquí."/></td>
			</tr>
			<tr>
				<td>btaman</td><td>598911546546</td><td><input type="email" placeholder="Escribe tu correo aquí."/></td>
			</tr>
		</table>
        <style>
    
            body {
    background-color: #632432;
    font-family: Arial;
}

#main-container {
    margin: 150px auto;
    width: 600px;
}

table {
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 20px;
}

thead {
    background-color: #246355;
    border-bottom: solid 5px #0F362D;
    color: white;
}

tr:nth-child(even) {
    background-color: #ddd;
}

tr:hover td {
    background-color: #369681;
    color: white;
}
        </style>
	</div>
</body>
</html>