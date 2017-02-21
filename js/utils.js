/*
 *
 * @Front End javascript Controller
 * @Copyright Morettic@ 2017
 */

var objectOne = {};
var bookies = [];
var element;
var branchs = [];
var pos = 0;
var pos1 = 0;
var tpFone = 'A';
var GenimoFrontEnd = function() {
    this.msg = "";
    this.divTit;
    this.divFone;
    this.indice = 0;
    /**
     *  @Show Fones with interval
     * */

    this.showBookies = function(Vbookes) {
        objectOne.bookies = Vbookes;
        objectOne.divAvatar = document.getElementById('logoAvatar');
        objectOne.divNmPerson = document.getElementById('txtNmPerson');
        objectOne.divFlCompany = document.getElementById('txtFlCompany');
        objectOne.divNrFone = document.getElementById('txtNrFoneCorretor');
        objectOne.divEmailC = document.getElementById('txtEmailCorretor');
        objectOne.idBookie = document.getElementById('idBookie');

        setInterval(function() {
            if (pos1 >= objectOne.bookies.length) {
                pos1 = 0;
            }

            objectOne.divAvatar.src = objectOne.bookies[pos1].dsPathAvatar;
            objectOne.divNmPerson.innerHTML = objectOne.bookies[pos1].nmPerson;
            objectOne.divFlCompany.innerHTML = (objectOne.bookies[pos1].flCompany == "1") ? "Imobiliaria" : "Corretor";
            objectOne.divNrFone.innerHTML = '<i class="fa fa-phone"> </i>' + objectOne.bookies[pos1].nuCelPhone;
            objectOne.divEmailC.innerHTML = objectOne.bookies[pos1].dsEmail;
            document.getElementById('idBookie').value = objectOne.bookies[pos1].idBookie;
            pos1++;
        }, 5000);
    };

    this.showFones = function(v, pbranch, d1, d2) {
        branchs = pbranch;
        this.divTit = document.getElementById(d1);
        this.divFone = document.getElementById(d2);
        element = v;
        setInterval(function() {
            if (pos >= branchs.length) {
                pos = 0;
                tpFone = tpFone == 'A' ? 'B' : tpFone == 'B' ? 'A' : 'B';
            }

            element.divTit.innerHTML = branchs[pos].nmCity;
            if (tpFone == 'A') {
                element.divFone.innerHTML = branchs[pos].nuPhone;
            } else {
                element.divFone.innerHTML = branchs[pos].nuCelPhone;
            }
            pos++;
        }, 3000);
    };

    this.validateForm = function(nome, telefone, email, mensagem) {
        this.msg == ""
        if (nome.value == "") {
            this.msg += "Informe seu nome.\n";
        }
        if (telefone.value == "") {
            this.msg += "Informe seu telefone.\n";
        }
        if (email.value == "") {
            this.msg += "Informe seu Email.\n";
        }
        if (mensagem.value == "") {
            this.msg += "Conte sua história.\n";
        }

        if (this.msg == "") {
            return true;
        } else {
            alert(this.msg);
            return false;
        }
    };
};

function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/D/g, "");             //Remove tudo o que não é dígito
    v = v.replace(/^(d{2})(d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(d)(d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
