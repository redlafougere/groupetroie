'use strict';
var s,r,t;  
r = false;   
s = document.createElement("script");  
s.type = "text/javascript"; 
s.src ="https://syndic.terre-net-media.fr/api-meteo-tn/?idpoint=2995150&geoloc=true&width=middle&c1=cec7c7&c2=%23ef8519&c3=%23ef8519&c4=%23efefef&c5=%23efefef";
s.className = "js-widget-terrenet"; 
s.onload = s.onreadystatechange = function(){if ( !r && (!this.readyState || this.readyState == "complete") ) { r = true;setwidgetMeteoTN();}};var t = document.getElementsByTagName("head")[0];
t.appendChild(s);


