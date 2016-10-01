function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest();
    oReq.onload = function() {
        changeCSS(this.responseText);
    };
    oReq.open("get", "myResults.php", true);
    oReq.send();







function changeCSS(cssFile) {
	var oldlink = document.getElementsByTagName("link").item(0);
	var nwSheet;
	document.write(cssFile);
	if (cssFile == 1)
		nwSheet = "Blue.css";
	else if (cssFile == 2)
		nwSheet = "Green.css";
	else if (cssFile == 3)
		nwSheet = "Orange.css";
	else
		nwSheet = "Purple.css";

	var newlink = document.createElement("link");
	newlink.setAttribute("rel", "stylesheet");
	newlink.setAttribute("type", "text/css");
	newlink.setAttribute("href", nwSheet);

	document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}