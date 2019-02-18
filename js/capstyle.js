function hideAlert(){
document.getElementById("messagebox").style.opacity = "0";
}


function  helpInfo(myName){ 
	var helpText;
	//if(myname == "orgname"){ helpText = "Please select the organization name that this request is being created for"};
	//if(myname == "execSelect"){ helpText = "Please select the name of the executive that would be approving this request"};
	//if(myname == "emer"){ helpText = "This request is outside the normal capital approval process time line then select Yes"};
	//if(myname == "execapp"){ helpText = "If you already received approval from the executive listed above then select Yes"};
	//if(myname == "emerboard"){ helpText = "Please speak with the board memeber prior to submitting your request"};
	if(myname == "emerjust"){ helpText = "Please enter a detailed justification as to why you are requesting out of the normal capital schedule"};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	//if(myname == ""){ helpText = ""};
	if(myName == "projname"){ helpText = "Please enter the project name"};
	if(myName == "usecase"){ helpText = "select the best use case that fits your total request"};
	
	score.window.InfoMsg(helpText);
	//score.window.Notify(helpText);
	//document.getElementById(myName).onfocus = score.window.Notify(helpText);
	//setTimeout(hideAlert(),8000);
}


//function findParentNode(parentName, childObj) {
//    var testObj = childObj.parentNode;
//    var count = 1;
//    while(testObj.getAttribute('name') != parentName) {
//        alert('My name is ' + testObj.getAttribute('name') + '. Let\'s try moving up one level to see what we get.');
//        testObj = testObj.parentNode;
//        count++;
//    }
    // now you have the object you are looking for - do something with it
//    alert('Finally found ' + testObj.getAttribute('name') + ' after going up ' + count + ' level(s) through the DOM tree');
//}




