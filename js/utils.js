/*
 *
 * @Front End javascript Controller
 * @Copyright Morettic@ 2017
 */

var objectOne = {};
var bookies = [];
var element;
var branchs = [];
var infoWindows = [];
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
    this.showFilter = function() {
        $("#divFilterDetail").dialog("open");
    }

    this.showFull = function() {
        for (i = 0; i < objectOne.lPoints.length; i++) {
            objectOne.lPoints[i].marker = new google.maps.Marker({
                position: new google.maps.LatLng(objectOne.lPoints[i].lat, objectOne.lPoints[i].lon),
                icon: iconC,
                title: objectOne.lPoints[i].title
            });
            var iconC = "images/map_marker.png";
            if (objectOne.lPoints[i].tp == "SAUDE") {
                iconC = "https://www.citywatch.com.br/v1/assets/images/saude.png";
            } else if (objectOne.lPoints[i].tp == "EDUCACAO") {
                iconC = "https://www.citywatch.com.br/v1/assets/images/educacao.png";
            } else if (objectOne.lPoints[i].tp == "TRANSPORTE") {
                iconC = "https://www.citywatch.com.br/v1/assets/images/transporte.png";
            } else if (objectOne.lPoints[i].tp == "SEGURANCA") {
                iconC = "https://www.citywatch.com.br/v1/assets/images/seguranca.png";
            } else if (objectOne.lPoints[i].tp == "ALIMENTACAO") {
                iconC = "https://www.citywatch.com.br/v1/assets/images/alimentacao.png";
            } else if (objectOne.lPoints[i].tp == "IMOVEIS") {
                iconC = "images/map_marker.png";

                objectOne.lPoints[i].infoWindow = new google.maps.InfoWindow({
                    content: objectOne.lPoints[i].contentString
                });
                objectOne.lPoints[i].marker.addListener('click', function() {
                    contentString = '<div id="content"><h1>' + objectOne.lPoints[this.idPos].title + '</h1><br><img style="border-radius: 15%;width:120px" src="' + objectOne.lPoints[this.idPos].pic + '"/>' + objectOne.lPoints[this.idPos].preco + '<br><a href=property-details.php?id=' + objectOne.lPoints[this.idPos].id + '>Ver mais</a></div>';
                    document.getElementById('divImovelDetail').innerHTML = contentString;
                    $("#divImovelDetail").dialog("open");
                    //objectOne.lPoints[i].infoWindow.open(map, objectOne.lPoints[i].marker);
                });
                objectOne.lPoints[i].infowindow = infoWindows[i];
                objectOne.lPoints[i].marker.idPos = i;
            }


            objectOne.lPoints[i].marker.setMap(map);
        }
    }
    this.addPointInfo = function(title, lat, lon, bairro, preco, id, pic) {
        if (objectOne.lPoints == undefined) {
            objectOne.lPoints = [];
        }
        var localPoint = new Object();
        localPoint.title = title;
        localPoint.lat = lat;
        localPoint.lon = lon;
        localPoint.bairro = bairro;
        localPoint.pic = pic;
        localPoint.preco = preco;
        localPoint.id = id;
        localPoint.tp = "IMOVEIS";

        objectOne.lPoints.push(localPoint);
    }
    this.addPoint = function(title, lat, lon, tp, desc) {
        if (objectOne.lPoints == undefined) {
            objectOne.lPoints = [];
        }
        var localPoint = new Object();
        localPoint.title = title;
        localPoint.lat = lat;
        localPoint.lon = lon;
        localPoint.tp = tp;
        localPoint.desc = desc;

        objectOne.lPoints.push(localPoint);
    };
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
    this.showMap = function() {
        document.getElementById('map_canvas').style.display = 'block';
        document.getElementById('map_canvas').style.visibility = 'visible';
        document.getElementById('grid_canvas').style.display = 'none';
        document.getElementById('grid_canvas').style.visibility = 'hidden';
    }
    this.showGrid1 = function() {
        document.getElementById('grid_canvas').style.display = 'block';
        document.getElementById('grid_canvas').style.visibility = 'visible';
        document.getElementById('map_canvas').style.display = 'none';
        document.getElementById('map_canvas').style.visibility = 'hidden';
    }
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
