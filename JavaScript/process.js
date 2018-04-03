
function ajaxRequest() {
  var username = document.getElementById("usr").value;
    var password = document.getElementById("pass").value;
    var str = [username, password];
    var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
      if (this.readyState === 4) {
          if (this.status === 200) {

	      if(request.responseText.length == 0){
		  document.getElementById('warning').innerHTML = "Wrong Username/Password try again";

	      }else{

		  document.getElementById('content').innerHTML = this.responseText;
	      }
        }
      }
  };

  request.open('GET', 'php/connect_db.php?usr=' + username +  '&pass=' + password, true);
  request.send();
}

function ajaxUpdate(){
    var notes = document.getElementById("notes").value;        
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (this.readyState === 4) {
          if (this.status === 200) {

	      if(request.responseText.length != 0){
		  document.getElementById('response').innerHTML = "Succesfully updated notes";

	      }else{
		  
		  document.getElementById('response').innerHTML = "Failed to update notes";
	      }
        }
      }
  
    };
   
    request.open('GET', 'php/update_notes.php?notes=' + notes, true);
    request.send();

}


function ajaxStocks(){

        
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (this.readyState === 4) {
          if (this.status === 200) {
	      document.getElementById("output").innerHTML = request.responseText;
        }
      }
  };

    request.open('GET', 'php/update_stocks.php?', true);
    request.send();
}


function moreStockInfo(){

        
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (this.readyState === 4) {
          if (this.status === 200) {
	      document.getElementById("output").innerHTML = request.responseText;
        }
      }
  };

    request.open('GET', 'php/moreStockInfo.php?', true);
    request.send();
}

