



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>

<select name="transporte">
    @foreach($lugar as $lugars)


        <option>{{$lugars->nombre}}Coche</option>


    @endforeach
</select>