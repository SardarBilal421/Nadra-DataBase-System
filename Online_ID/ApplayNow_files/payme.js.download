var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

// Listen to message from child window
eventer(messageEvent,function(e) {
    var key = e.message ? "message" : "data";
    var data = e[key];
    
    //alert(key);
    //alert(data);
    
    //...payment is successful
    if(data == 'accept'){
    	showAK();
    }
    else if(data == 'close'){
    	var d = document.getElementById('dialog');
		d.close();
    }
    
},false);


function showAK() {
    document.getElementById('paymentAK').style.display = 'block';
    document.getElementById('paymentPending').style.display = 'none';
}

// called by newrenewal, new modification, new nicop and new reprint pages onLoad
function showAKOnload(appType) {
    
	//alert(myWizard.currentStep);	
	if(PF('myWizard') && PF('myWizard').currentStep == 'payment'){
		if(appType == 'renewal' || appType == 'modification'){
			PF('myWizard').next();
		}
	}
}