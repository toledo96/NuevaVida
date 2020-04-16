<div style="padding-top: 80px;padding-bottom:30px;"> 
    <h1 class="color" style="text-align: center;">¡CONTÁCTANOS!</h1>
    <form action="/correo" method="POST" style="padding-top:20px;">
        @csrf
        <div class="form-group">
            <label class="color" style="font-size:25px" for="formGroupExampleInput">Nombre Completo</label>
            <input name="nombre" class="form-control form-control-lg" type="text" placeholder="">
        </div>
        <div class="form-group">
            <label class="color" style="font-size:25px" for="formGroupExampleInput">Correo</label>
            <input name="correo" class="form-control form-control-lg" type="email" placeholder="">
        </div>
        <div class="form-group">
            <label class="color" style="font-size:25px" for="formGroupExampleInput">Teléfono</label>
            <input name="telefono" class="form-control form-control-lg" type="text" placeholder="">
        </div>
        <div class="form-group">
            <label class="color" style="font-size:25px" for="formGroupExampleInput">Edad</label>
            <input name="edad" class="form-control form-control-lg" type="text" placeholder="">
        </div>
        <div class="form-group">
        <label class="color" style="font-size:25px" for="formGroupExampleInput2">¿Te gustaría formar parte de un grupo conexión?</label>
            <select name="grupo" class="form-control form-control-lg">
                <option>Respuesta</option>
                <option>Si</option>
                <option>No</option>
                <option>Ya estoy en un grupo</option>
            </select>
        </div>
        <div class="form-group">
            <label class="color" style="font-size:25px" for="formGroupExampleInput2">Asunto</label>
            <select name="asunto" class="form-control form-control-lg">
                <option>Asunto</option>
                <option>Oración</option>
                <option>Información</option>
            </select>
        </div>

        <div class="form-group">
            <label class="color" style="font-size:25px" for="exampleFormControlTextarea1">Mensaje</label>
            <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
    </div>

        <div style="padding-top: 10px;">
            <button style="height:60px;" type="submit"  class="btn btn-success btn-lg btn-block rounded-pill">Enviar</button>
        </div>

    </form>
</div>