function validasi() {
  
	var konfir = window.confirm ("Apakah yakin sudah benar?");
	if (konfir == true){
	}
}

	
}
function checkpw(){
    var p = document.getElementById("password").value;
    var vp= document.getElementById("vpassword").value;
    var btn = document.getElementById("d");
    var a = document.getElementById("alert");
    if(p!==vp){
        btn.disabled=true;
        a.innerHTML="zeranel proplayer";
        
    }else{
        btn.disabled=false;
        a.innerHTML="";
    }
}