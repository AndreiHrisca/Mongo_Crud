function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	}else{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}

function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

if(getCookie('tiendaaviso')!="1"){
	document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
	setCookie('tiendaaviso','1',365);
	document.getElementById("barraaceptacion").style.display="none";
}





// On page load set the theme.
(function() {
    let onpageLoad = localStorage.getItem("theme") || "";
    let element = document.body;
    element.classList.add(onpageLoad);
    document.getElementById("theme").textContent =
      localStorage.getItem("theme") || "light";
  })();
  
  function themeToggle() {
    let element = document.body;
    element.classList.toggle("dark-mode");
  
    let theme = localStorage.getItem("theme");
    if (theme && theme === "dark-mode") {
      localStorage.setItem("theme", "");
    } else {
      localStorage.setItem("theme", "dark-mode");
    }
  
    document.getElementById("theme").textContent = localStorage.getItem("theme");
  }