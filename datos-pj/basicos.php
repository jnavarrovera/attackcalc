
<div class="container-fluid">
    <form>
        <fieldset class="form-group row">
            <legend class="col-form-legend col-12">Características</legend>
                <div class="col-12">
                    <div class="form-group row">
                        <label for="fue" class="col-2 col-form-label">Fuerza</label>
                        <div class="col-2">
                            <input type="number" class="form-control" name="fue" id="fue" placeholder="" value="0">
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label for="des" class="col-2 col-form-label">Destreza</label>
                        <div class="col-2">
                            <input type="number" class="form-control" name="des" id="des" placeholder="" value="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="con" class="col-2 col-form-label">Constitución</label>
                        <div class="col-2">
                            <input type="number" class="form-control" name="con" id="con" placeholder="" value="0">
                        </div>
                    </div>                    
                </div>
        </fieldset>
        <fieldset class="form-group row">
            <legend class="col-form-legend col-12">Otros</legend>
                <div class="col-12">
                    <div class="form-group row">
                        <label for="ab" class="col-2 col-form-label">Ataque Base</label>
                        <div class="col-2">
                            <input type="number" class="form-control" name="ab" id="ab" placeholder="" value="0">
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label for="ab" class="col-2 col-form-label">Tamaño</label>
                        <div class="col-2">
                            <select class="form-control" id="tam">
                                <option value="peq">Pequeño</option>
                                <option value="med" selected >Mediano</option>
                                <option value="gra">Grande</option>                                
                            </select>
                        </div>                        
                    </div>
                </div>
        </fieldset>
    </form>
</div>