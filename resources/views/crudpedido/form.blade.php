<div class="container">
<div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
    <label for="estado" class="col-md-4 control-label">Estado mesa</label>
    <div class="col-md-6">
        <input id="estado" type="estado" class="form-control" name="estado" required>
        @if ($errors->has('estado'))
        <span class="help-block">
        	<strong>{{ $errors->first('estado') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="tipo" class="col-md-4 control-label">ID mesa</label>
    <div class="col-md-6">
        <select name="tipo" class="form-control">
        	<option value="" disabled selected>Elige una opcion...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
        </select>
    </div>
</div> 

<div class="form-group">
    <label for="tipo" class="col-md-4 control-label">ID empleado</label>
    <div class="col-md-6">
        <select name="tipo" class="form-control">
            <option value="" disabled selected>Elige una opcion...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
        </select>
    </div>
</div> 

<div class="form-group">
    <label for="tipo" class="col-md-4 control-label">ID menú</label>
    <div class="col-md-6">
        <select name="tipo" class="form-control">
            <option value="" disabled selected>Elige una opcion...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
        </select>
    </div>
</div> 

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
</div>