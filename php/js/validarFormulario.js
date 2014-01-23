$(document).ready(function(){
      $('#formulario').validate({
  
           rules: {
              nick_register : {
                                required : true, //campo obligatorio
                                minlength: 1
                               },
          
              email_register : {
                                email : true,   //para validar formato email
                                required : true //campo obligatorio
                               },
     
             pass_register : {
                               minlength: 7, //minimo 7 carcateres
                               required:true  //campo obligatorio
                             },
      
           idioma_register : {
                               required : true // campo obligatorio
                             },
      
            pais_register : {
                              required : true //campo obligatorio
                            }
          },
          
          messages: {
	           nick_register: {
                                    required: "El campo es obligatorio.",
                                    minlength:"Formato no válido"
                                },
                                
	          email_register : {
                                    email : "El campo es obligatorio y debe tener formato de email correcto.",
                                    required : "Porfavor, introduzca su email"
                                 },
                                 
	          pass_register : {
                                      minlength : "Password no válido,minimo 7 caracteres",
                                      required : "Porfavor , introduzca un password"
                                   }, 
                        
		  idioma_register :"El campo es obligatorio",
                    
                  pais_register:  "El campo es obligatorio ",
	  },
                
              
               debug:true,
               
               submitHandler: function(form) {
                        form.submit();    
               }
               
   });
});
          