function calc() {
    //alert('arma '+$('#nom-arma').val());
    calcAtaque();
    calcDmg();
    //alert(ataques[0]);
    //TODO: Formatear según ataques!
    $('#total-ataque').html(textoAtaques('principal'));
    $('#total-dmg').html(textoDmg('principal'));
    $('#nombre-ataque').html($('#nom-arma-principal').val()+' ');
}

function calcAtaque() {
    var bonAtaque=0;
    var attr = $('#key-attr-atq').val();
    var ab = parseInt($('#ab').val());    
    
    bonAtaque += parseInt($('#'+attr).val());
    bonAtaque += parseInt($('#attack-bonus').val());
    bonAtaque += modSize($('#tam').val());
    
    ataques = [];
    ataques['principal']=[];
    ataques['principal'][0]=bonAtaque;    

    var j=0;
    for (let i = ab; i > 0; i-=5) {
        ataques['principal'][j] = i + bonAtaque;
        j++;
    }
}

function calcDmg() {
    var dosmanos = $('#arma2manos').prop('checked');
    var bonDmg = 0;
    var attr = $('#key-attr-dmg').val();
    var bonAttr = parseInt($('#'+attr).val());
    
    if(dosmanos){
        bonDmg += Math.floor(bonAttr*1.5);
    }else{
        bonDmg += bonAttr;
    }

    bonDmg += parseInt($('#dmg-bonus').val());

    dmg = [];
    dmg['principal'] = bonDmg;

    
}

function textoAtaques(tipo) {
    var salida = '';
    var simbolo = '+';

    ataques[tipo].forEach(ataque => {
        if(salida != ''){
            salida+='/';
        }
        if(parseInt(ataque)<0){
            simbolo = ''
        }
        salida += simbolo + ataque;
    });    

    return salida;
}

function textoDmg(tipo) {
    var salida = '';
    var simbolo = '+';
    var dmgArma = $('#dmg-arma-'+tipo).val();

    salida += dmgArma;
    
    if(dmg[tipo]>0){
        salida += simbolo;
    }
    if(dmg[tipo]!=0){
        salida += dmg[tipo];
    }

    return salida;
}

function modSize(size) {
    var mod = 0;
    switch (size) {
        case 'peq':
            mod = +1;
            break;
        case 'gra':
            mod = -1;
            break;    
        default:
            break;
    }
    return mod;
}