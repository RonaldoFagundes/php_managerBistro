

     

       
      const btnInsert = document.querySelector('.btnInsert');
      btnInsert.addEventListener ( 'click', () => openModal('insert')  );

      const btnClose = document.querySelector('.btnClose');
      btnClose.addEventListener ( 'click', () => closeModal('insert')  );

   

       function openModal (modalName){       
           const modal = document.getElementById(modalName);    
           modal.classList.add('show');	     
       }



     
      function closeModal (modalName){       
         const modal = document.getElementById(modalName);    
         modal.classList.remove('show');     
    }  







    

    const btnCadUser = document.querySelector('.cad-user');

    btnCadUser.addEventListener("click", validate);    



    function validate(e) {

      e.preventDefault();
    
      const name = document.getElementById("name");

      const email = document.getElementById("email");

      const password = document.getElementById("password");

     // let valid = true;

      const msgError = document.getElementById("msgError");
    

      if (!name.value ) {
      
        msgError.classList.add("visible");
        msgError.innerHTML = " preencha campo nome !";
        name.classList.add("invalid");
        msgError.setAttribute("aria-hidden", false);
        msgError.setAttribute("aria-invalid", true);     
        return false;  

      }

     else if (!email.value ) {    

        msgError.classList.add("visible");
        msgError.innerHTML = " preencha campo email !";
        email.classList.add("invalid");
        msgError.setAttribute("aria-hidden", false);
        msgError.setAttribute("aria-invalid", true);             
        return false;

      } 
      
      else if (!email.value.includes("@" && ".com")  ) {

          msgError.classList.add("visible");
          msgError.innerHTML = " preencha com email valido !";
          email.classList.add("invalid");
          msgError.setAttribute("aria-hidden", false);
          msgError.setAttribute("aria-invalid", true);  
          email.value = "";
          password.value = "";
          return false;

        }
        
      else if (!password.value) {
   
      msgError.classList.add("visible");
      msgError.innerHTML = " preencha campo senha !"
      password.classList.add("invalid");
      msgError.setAttribute("aria-hidden", false);
      msgError.setAttribute("aria-invalid", true);      
      return false;

      }
      
      else if (password.value.length < 8 ) {

        msgError.classList.add("visible");
        msgError.innerHTML = " preencha campo senha com 8 caracteres !"
        password.classList.add("invalid");
        msgError.setAttribute("aria-hidden", false);
        msgError.setAttribute("aria-invalid", true);
        return false;

       }
       
       else{

        let form = document.getElementById("form_cad");
        form.submit();   
       
      // return valid;
       
    }

   


  }