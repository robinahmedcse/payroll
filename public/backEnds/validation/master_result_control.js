function master_result_control() {

    alert("master_result_disabled_and_enabled");
    
    if (document.getElementById('masters').checked) {
        alert("master_result_enabled");
    
     document.getElementById('examination_master').disabled = false;
     document.getElementById('university_master').disabled = false;
     document.getElementById('subject_master').disabled = false;
     document.getElementById('result_master').disabled = false;
     document.getElementById('passing_year_master').disabled = false;
     document.getElementById('course_duration_master').disabled = false;
    
    }
    
    if (!document.getElementById('masters').checked) {
     
    
       document.getElementById('examination_master').disabled = true;
       document.getElementById('university_master').disabled = true;
       document.getElementById('subject_master').disabled = true;
     document.getElementById('result_master').disabled = true;
     document.getElementById('passing_year_master').disabled = true;
     document.getElementById('course_duration_master').disabled = true;
    
    }
    
    
    }
    
    