function OprosForm(el) {
    var name = el.name.value;	
    var CheckOpros = el.CheckOpros.value;
    var cStr = "";

    if (name == "")
        cStr = "Не введено имя";
	else if (CheckOpros == "")
		cStr = "Не выбран ни один вариант";
    if (cStr != "") {		
        document.getElementById('error').innerHTML = cStr;	     
        return false;
    } else {
        document.write("Добрый день, " + name + "! Вы выбрали " + CheckOpros)
        return true;
    }
}