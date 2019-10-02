registro persona


<form action="{{url ('persona')}}" method = "post" enctype = "multipart/form-data">

{{csrf_field()}}

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">

</br>
<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="">
</br>
<label for="cedula">{{'Cedula'}}</label>
<input type="number" name="cedula" id="cedula" value="">
</br>

<label for="departamento">{{'Departamento'}}</label>
<input type="text" name="departamento" id="departamento" value="">
</br>

<label for="ciudad">{{'Ciudad'}}</label>
<input type="text" name="ciudad" id="ciudad" value="">
</br>
<label for="celular">{{'Celular'}}</label>
<input type="number" name="celular" id="celular" value="">
</br>
<label for="correo">{{'Correo'}}</label>
<input type="email" name="correo" id="correo" value="">
</br>
<label for="habeasData">{{'habeasData'}}</label>
<input type="radio" name="habeasData" id="habeasData" value="si">
</br>

<input type="submit"="Agregar">

</form>