var flagCheck = false;
document.onclick = popuptoclose;

function popuptoclose(e)
{ 
        var evt = (e)?e:event;        
        var elem = (evt.srcElement)?evt.srcElement:evt.target;

        var closePopup=true;
        
         if(elem!=null || elem.id != null){
         
          if(elem.id != "change_location_content" && elem.id != "rightnow_search" && elem.id != "right_now_popup_img" && document.getElementById('change_location_content').style.display == 'block') {
          	document.getElementById('change_location_content').style.display = 'none';
            return true;
          }
		 
		 if(elem.id == "default" || elem.id == "selectedLanguage") {
		  	if(flagCheck == false){
		  		flagCheck = true;
		  		document.getElementById('selectedLanguage').style.visibility = 'visible';
          		closePopup=false;
            	return true;
            }	
          }
           			 
          elem = elem.parentNode;         
        }
                
        if(closePopup){
        	flagCheck = false;
        	document.getElementById('selectedLanguage').style.visibility = 'hidden';
	    }
        
        return true;
}


function changeLocContent(divid){

	if(divid == 'change_location_content') {
	    if(document.getElementById(divid).style.display == 'none'){
	    	document.getElementById(divid).style.display = 'block';
	    } else{
	     	document.getElementById(divid).style.display = 'none';
	    }
    }
}
