<form action="/app-pasantias/estudiante-store" method="post">

    <label for="">cedula:</label>
    <input type="text" name="cedula" required>

    <label for="">primer nombre:</label>
    <input type="text" name="nombre1" required>

    <label for="">segundo nombre:</label>
    <input type="text" name="nombre2" required>

    <label for="">primer apellido</label>
    <input type="text" name="apellido1" required>

    <label for="">segundo apellido:</label>
    <input type="text" name="apellido2" required>

    <label for="">telefono:</label>
    <input type="tel" name="telefono" pattern="[0-9]{4}[0-9]{7}" title="Un número de teléfono válido debe tener 4 dígitos, un guión (-) y 7 dígitos más" required>

    <label for="">correo:</label>
    <input type="email" name="correo" required>

    <label for="">fecha_nacimiento</label>
    <input type="date" name="fecha_nacimiento" required>

    <label for="">sexo:</label>
    <select name="sexo" required>
        <option value="N" selected disabled>- Seleccione -</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
    
    <label for="">direccion:</label>
    <input type="text" name="direccion" required>

    <label for="">curriculum:</label>
    <input type="text" name="nombre_curriculum" required>

    <label for="">conocimientos:</label>
    <input type="text" name="conocimientos" required>

    <label for="">habilidades:</label>
    <input type="text" name="habilidades" required>

    <label for="">cursos:</label>
    <input type="text" name="cursos" required>

    <label for="">periodo:</label>
    <input type="date" name="periodo" required>

    <label for="">promedio:</label>
    <input type="number" step="0.01" name="promedio" required>

    <input type="submit" value="enviar">

</form>