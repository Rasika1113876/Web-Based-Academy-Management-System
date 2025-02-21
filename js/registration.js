/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function registrationTraineeLoad() {
    
  // var ac_id = $('#u_id').val();
   var ac_typ = $('#u_typ').val();
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
   var ac_pwd = $('#u_pwd').val();
   var ac_cpwd = $('#u_cpwd').val();
    //alert(cus_email);
    //alert(cus_passward);
    

//$.post("path",{dataset})
$.post("database/registration.php",{Actyp:ac_typ,Acfnm:ac_fnm,Acttl:ac_ttl,Acnm:ac_nm,Acadd1:ac_add1,Acadd2:ac_add2,Acadd3:ac_add3,Acnic:ac_nic,Acdob:ac_dob,Actp:ac_tp,Acemail:ac_email,Acpwd:ac_pwd,Accpwd:ac_cpwd},
function (result_data) {
                $.each(result_data, function (index, msg_data) {
                    if (msg_data.type === "1") {
                        document.getElementById("msgalert").innerHTML = "<div class='alert alert-success col-md-4' role='alert'>" + msg_data.msg + "</div>";
                    } else {
                        document.getElementById("msgalert").innerHTML = "<div class='alert alert-danger col-md-4' role='alert'>" + msg_data.msg + "</div>";
                    }
                });       
     
     
},"json");
}

////////////////////////TO CLEAR FORM DATA///////////////////////////

function ClearUserData(){
    $('#u_id').val('');
    $('#u_typ').val('');
    $('#u_fnm').val('');                                     
    $('#u_ttl').val('');
    $('#u_nm').val('');
    $('#u_add1').val('');                                        
    $('#u_add2').val('');                                                                                
    $('#u_add3').val('');                                        
    $('#u_nic').val('');                                       
    $('#u_dob').val('');
    $('#u_tp').val('');
    $('#u_email').val('');
    $('#u_pwd').val('');
    $('#u_cpwd').html(''); 
  
    }