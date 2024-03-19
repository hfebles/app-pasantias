<form action="/app-pasantias/usuario-store" method="post">

    <label for="">nombre:</label>
    <input type="text" name="nombre">

    <label for="">apellido:</label>
    <input type="text" name="apellido">

    <label for="">user:</label>
    <input type="text" name="user">

    <label for="">password:</label>
    <input type="password" name="password">

    <label>Seleccione el nivel de acceso:</label>
    <select name="nivel" id="nivel">
        <option value="0">- Seleccione -</option>
        <option value="1">Administrador</option>
        <option value="2">Coordinador Pasantias</option>
        <option value="3">Coor. Media Tecnica</option>
        <option value="4">Secretaria</option>
    </select>

    <input type="submit" value="Enviar">

</form>