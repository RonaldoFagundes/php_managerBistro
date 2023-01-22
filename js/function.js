


       
      const btnInsert = document.querySelector('.btnInsert');
      btnInsert.addEventListener ( 'click', () => openModal('insert')  );


      const btnClose = document.querySelector('.btnClose');
      btnClose.addEventListener ( 'click', () => closeModal('insert')  );

      /*
      const btnUpdate = document.querySelector('.btnUpdate');
      btnUpdate.addEventListener ( 'click', () => openModal('update')  );
    
      const btnDelete = document.querySelector('.btnDelete');
      btnDelete.addEventListener ( 'click', () => openModal('delete')  );
       */
      


       function openModal (modalName){
       
           const modal = document.getElementById(modalName);    
           modal.classList.add('show');	

       /*
        modal.addEventListener ( 'click',(e) => {		
       
          if (e.target.id == modal || e.target.className == 'btnClose'){
          modal.classList.remove('show');	  
          }
        
        });
      */

      }



     
    function closeModal (modalName){       
        const modal = document.getElementById(modalName);    
        modal.classList.remove('show');     
    }  
