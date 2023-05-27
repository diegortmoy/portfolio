function validEmail(emailAddress){

			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if (!filter.test(emailAddress)) {    
				return false;
			} 
			return true;
		}	
				 
			    function validar(){
					
                document.getElementById('name').style.borderStyle = 'none';
				document.getElementById('email').style.borderStyle = 'none';
				document.getElementById('comments').style.borderStyle = 'none'; 
 
             
               if (document.getElementById('name').value.trim().length == 0 || document.getElementById('name').value.trim() == 'Name *'){
                    alert("Por favor ingrese un nombre!!!");
                    document.getElementById('name').value = "";
                    document.getElementById('name').focus();
                    document.getElementById('name').style.border = "2px solid red";
				    document.getElementById('name').style.borderRadius = "4px";
                    return false;
               }
					
				
			   if (document.getElementById('email').value.trim().length == 0 || document.getElementById('email').value.trim() == 'Email *'){
                    alert("Por favor ingrese un email!!!");
                    document.getElementById('email').value = "";
                    document.getElementById('email').focus();
                    document.getElementById('email').style.border = "2px solid red";
				    document.getElementById('email').style.borderRadius = "4px";
                    return false;
               }
               
				if(validEmail(document.getElementById('email').value.trim()) == false){
					alert("Email invalido!!!!");
					document.getElementById('email').value = "";
					document.getElementById('email').focus();
					document.getElementById('email').style.border = "2px solid red";
				    document.getElementById('email').style.borderRadius = "4px";
					return false;
				
				}
			   
			  
			    if (document.getElementById('comments').value.trim().length == 0 || document.getElementById('comments').value.trim() == 'Message *'){
                    alert("Por favor envienos un mensaje!!!");
                    document.getElementById('comments').value = "";
                    document.getElementById('comments').focus();
                    document.getElementById('comments').style.border = "2px solid red";
				    document.getElementById('comments').style.borderRadius = "4px";
                    return false;
               }
			   
			return true;
					
            
            }