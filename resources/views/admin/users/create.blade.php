<x-admin-layout>
    <div style="background-color: #f2f2f2; padding: 20px;">
        <h2 style="text-align:center;">Registro de Usuario</h2>
        <form style="max-width: 500px; margin: 0 auto;">
          <label for="username" style="display: block; font-size: 18px; margin-bottom: 5px;">Nombre de Usuario:</label>
          <input type="text" id="username" name="username" style="display: block; width: 100%; padding: 10px; border: none; border-radius: 5px; margin-bottom: 15px;">
          <label for="email" style="display: block; font-size: 18px; margin-bottom: 5px;">Correo Electrónico:</label>
          <input type="email" id="email" name="email" style="display: block; width: 100%; padding: 10px; border: none; border-radius: 5px; margin-bottom: 15px;">
          <label for="password" style="display: block; font-size: 18px; margin-bottom: 5px;">Contraseña:</label>
          <input type="password" id="password" name="password" style="display: block; width: 100%; padding: 10px; border: none; border-radius: 5px; margin-bottom: 15px;">
          <button  type="submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; margin-top: 10px;">Registrar Nuevo Usuario</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <a href="{{ back()->getTargetUrl() }}" style="display: inline-block; margin-top: 10px; background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; text-decoration: none;">Volver Atrás</a>

      </div>
</x-admin-layout>
