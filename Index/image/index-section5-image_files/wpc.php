/*<![CDATA[*/
(function(w) {
    var wg = w.document.getElementById('wp_tg_cts');
    function doPair(url) {
        if (wg == null) { return; }
        (function(_url) {
            var frm = w.document.createElement('IFRAME');
            frm.width = '1px';
            frm.height = '1px';
            frm.style.display = 'none';
            frm.src='about:blank';
            frm.title = 'tgpairing';
            wg.appendChild(frm);

            var ifrm = (frm.contentWindow) ? frm.contentWindow : (frm.contentDocument.document ? frm.contentDocument.document : frm.contentDocument);
            ifrm.document.open();
            ifrm.document.write('<img src=\"' + _url + '\"/>');
            ifrm.document.close();

            setTimeout(function() {
                wg.removeChild(frm);
            }, 2000);
        })(url);
    }

    try {
        var links = ["https:\/\/mat.adpies.com\/mat\/init?oaid=7d82a77397d1a848d8465065450f4f7f\u0026landing=https%3A%2F%2Fastg.widerplanet.com%2Fdelivery%2Fwpp.php%3Fwpg%3Dadpies_rtb%26oaid%3D7d82a77397d1a848d8465065450f4f7f","https:\/\/cm.g.doubleclick.net\/pixel?google_nid=wider_planet\u0026google_cm\u0026google_ula=12153253,1710047640\u0026poaid=7d82a77397d1a848d8465065450f4f7f","https:\/\/cm-exchange.toast.com\/bi\/pixel?cm_pid=1107948209\u0026puid=7d82a77397d1a848d8465065450f4f7f\u0026toast_push"],
            len = links.length,
            i;
        for (i=0; i<len; i++) {
            doPair(links[i]);
        }
    } catch(e) {}
})(window);
/*]]>*/


/*<![CDATA[*/
(function() {
var ttd = new Image();
ttd.src = "https:\/\/match.adsrvr.org\/track\/cmf\/generic?ttd_pid=ven6wdk\u0026ttd_tpi=1\u0026ttd_puid=7d82a77397d1a848d8465065450f4f7f";
})();
/*]]>*/








