function registeredTraineeUpdate() {
    //alert("aaa");
   var ac_id = $('#u_id').val();
   var ac_fnm = $('#u_fnm').val();
   var ac_ttl = $('#u_ttl').val();
   var ac_nm = $('#u_nm').val();
   var ac_add1 = $('#u_add1').val();
    var ac_add2 = $('#u_add2').val();
   var ac_add3 = $('#u_add3').val();
   var ac_nic = $('#u_nic').val();
   var ac_dob = $('#u_dob').val();
   var ac_tp = $('#u_tp').val();
   var ac_email = $('#u_email').val();
  
   
   
    $.post("database/regi_update.php", {Acid:ac_id,Acfnm:ac_fnm,Acttl:ac_ttl,Acnm:ac_nm,Acadd1:ac_add1,Acadd2:ac_add2,Acadd3:ac_add3,Acnic:ac_nic,Acdob:ac_dob,Actp:ac_tp,Acemail:ac_email},
            function (e) {
 regiLoad();
            }, "json");
}


