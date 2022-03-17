var usuario = $.trim($("#usuario").val(""));    
var password =$.trim($("#password").val("")); 

var nombre = $.trim($("#nombre_s").val("") );
var paterno = $.trim($("#ap_paterno").val("") );
var materno = $.trim($("#ap_materno").val("") );
var nom_usuario = $.trim($("#nombre_usuario").val("") );
var alias = $.trim($("#alias").val("") );
var pass = $.trim($("#password_registro").val("") );

$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
    
   if(usuario == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   console.log(data);
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "dashboard/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});

$('#formAccount').submit(function(e){
    e.preventDefault();
    var nombre = $.trim($("#nombre_s").val() );
    var paterno = $.trim($("#ap_paterno").val() );
    var materno = $.trim($("#ap_materno").val() );
    var nom_usuario = $.trim($("#nombre_usuario").val() );
    var alias = $.trim($("#alias").val() );
    var pass = $.trim($("#password_registro").val() );

    if(nombre == "" || paterno == "" || materno == "" || nom_usuario == "" || alias == "" || pass == ""){
        Swal.fire({
            type:'warning',
            title: 'Llene todos los campos necesarios para continuar con el registro',
        });
        return false;
    }else {
        /*Swal.fire({
            type: 'success',
            title: 'No lo haga compa',
        });*/
        $.ajax({
            url:"./bd/usuario_nuevo.php",
            type: "POST",
            datatype: "json",
            data: {nombre:nombre, ap_paterno:paterno, ap_materno:materno, username:nom_usuario, alias:alias, password:pass },
            success:function(data){
                if(data == 1){
                    Swal.fire({
                        type: 'warning',
                        title: 'La persona ya esta registrada en el sistema'
                    });
                    return false;
                }else if(data == 2){
                    Swal.fire({
                        type: 'warning',
                        title: 'Ya existe el nombre de usuario, por favor ingrese otro',
                    });
                    return false;
                }else if(data == 3){
                    Swal.fire({
                        type: 'warning',
                        title: 'Ya existe el alias, por favor ingrese otro',
                    });
                    return false;
                }else{
                    console.log(data);
                    Swal.fire({
                        type: 'success',
                        title: 'Usuario agregado exitosamente',
                    });
                }
            }
        });
    }
});