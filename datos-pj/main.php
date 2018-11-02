<div class="row apartado" id="datosPj-container">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-basicos-tab" data-toggle="pill" href="#v-pills-basicos" role="tab" aria-controls="v-pills-basicos" aria-selected="true">Básicos</a>
        <a class="nav-link" id="v-pills-dotes-tab" data-toggle="pill" href="#v-pills-dotes" role="tab" aria-controls="v-pills-dotes" aria-selected="false">Dotes</a>
        <a class="nav-link" id="v-pills-rasgos-tab" data-toggle="pill" href="#v-pills-rasgos" role="tab" aria-controls="v-pills-rasgos" aria-selected="false">Rasgos de clase</a>
        <a class="nav-link" id="v-pills-objetos-tab" data-toggle="pill" href="#v-pills-objetos" role="tab" aria-controls="v-pills-objetos" aria-selected="false">Objetos</a>
        <a class="nav-link" id="v-pills-otros-tab" data-toggle="pill" href="#v-pills-otros" role="tab" aria-controls="v-pills-otros" aria-selected="false">Otros</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-basicos" role="tabpanel" aria-labelledby="v-pills-basicos-tab"><?php include 'basicos.php'; ?></div>
        <div class="tab-pane fade" id="v-pills-dotes" role="tabpanel" aria-labelledby="v-pills-dotes-tab">...</div>
        <div class="tab-pane fade" id="v-pills-rasgos" role="tabpanel" aria-labelledby="v-pills-rasgos-tab">...</div>
        <div class="tab-pane fade" id="v-pills-objetos" role="tabpanel" aria-labelledby="v-pills-objetos-tab"><?php include 'objetos.php'; ?></div>
        <div class="tab-pane fade" id="v-pills-otros" role="tabpanel" aria-labelledby="v-pills-otros-tab">...</div>
        </div>
    </div>
</div>
<input type="hidden"name="attack-bonus" id="attack-bonus" value="0">
<input type="hidden"name="dmg-bonus" id="dmg-bonus" value="0">
<input type="hidden"name="key-attr-atq" id="key-attr-atq" value="fue">
<input type="hidden"name="key-attr-dmg" id="key-attr-dmg" value="fue">
