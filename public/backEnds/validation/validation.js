
function master_result_control(){
 
    alert("master_result_disabled_and_enabled"); 
  
      if (document.getElementById('masters').checked)
      {
      alert("master_result_enabled"); 
  
          document.getElementById('examination_master').disabled = false;
      document.getElementById('subject_master').disabled = false;
   
      }
  
      if (!document.getElementById('masters').checked)
      { 
      alert("master_result_disabled"); 
   
      document.getElementById('examination_master').disabled = ture;
      document.getElementById('subject_master').disabled = ture;
     
      }
  
  
  }