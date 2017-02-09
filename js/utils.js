/*
 *
 * @Front End javascript Controller
 * @Copyright Morettic@ 2017
 */

var element;
var branchs = [];
var pos = 0;
var tpFone = 'A';
var GenimoFrontEnd = function() {

    this.divTit;
    this.divFone;
    this.indice = 0;
    /**
     *  @Show Fones with interval
     * */

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
    }
}

