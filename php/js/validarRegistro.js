
function invisible(x){
   
     
// cojo todos los span por su id, para los mensajes
     
     var mN=document.getElementById("mNombre");
     var mA=document.getElementById("mApellido");
     var mF=document.getElementById("mFecha");
     var mP=document.getElementById("mPais");
     var mC=document.getElementById("mCodigo");
     var mNi=document.getElementById("mNick");
     var mPas=document.getElementById("mPassword");
     var mEm=document.getElementById("mEmail");
     var mD=document.getElementById("mDispon");
     switch(x){
         case "nombre": mN.innerHTML='';
                        break;
         case "apellido": mA.innerHTML='';
                          break;
         case ("dia"||"mes"|| "anyo"): mF.innerHTML='';
                                       break;
         case "pais": mP.innerHTML='';
                      break;
     
         case "cp": mC.innerHTML='';
                    break;
         case "nick": mNi.innerHTML='';
                      break;
      
         case "contrasena1": mPas.innerHTML='';
                                               break;
         case "email1": mEm.innerHTML='';
                        break;
     
         case "disponibilidad": mD.innerHTML='';
                               break;
       }

 }





function validar(){
     
//expresiones regulares
     var nameRegex=/^[a-zA-Z]+(([\-][a-zA-Z ])?\s[a-zA-Z]*)*$/;
     var dateAnioRegex=/^\d{4}$/;
     var dateDiaRegex= /^\d{1,2}$/;
     var cpRegex=/^\d{5}$/;  //cifra numerica de princio a fin en la que abra 5 ocurrencias 
     var contrasRegex=/^\w{5,10}$/; //entre ocho y dies caracteres y digito. 
     var mailRegex=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
     alert("e entrado a validar"); 
 //creo un array para los elementos que estan con informacion invalida
     var info=[]; 

 //en un principio enviar esta activo
     var confirmar=true; 
    
 // obtengo los los elementos id
     var nom=document.getElementById("nombre");
     var ape=document.getElementById("apellido");
     var dd=document.getElementById("dia");
     var mm=document.getElementById("mes");
     var aa=document.getElementById("anyo");
     var pais=document.getElementById("pais");
     var cp=document.getElementById("cp");
     var nick=document.getElementById("nick");
     var contras1=document.getElementById("contrasena1");
     var contras2=document.getElementById("contrasena2");
     var mail1=document.getElementById("email1");
     var mail2=document.getElementById("email2");
     //no controlo profesion,no es obligatorio
     //no controlo idioma porque es de seleccion ya definida
     //no controlo sexo porque es de seleccion ya definida
     //no controlo aficciones porque no es obligatorio 
     var disp=document.getElementById("disponibilidad");//solo controlo que si se rellene
     

 // cojo los valores de cada elemento
     var nomvalor=nom.value;
     var apevalor=ape.value;
     var ddvalor=dd.value;
     var mmvalor=mm.value;
     var aavalor=aa.value;
     var paisvalor=pais.value;
     var cpvalor=cp.value;
     var nickvalor=nick.value;
     var contras1valor=contras1.value;
     var contras2valor=contras2.value;
     var mail1valor=mail1.value;
     var mail2valor=mail2.value;
     var profvalor=profesion.value;
     var dispvalor = disp.value;
  
    // obtengo los span de mensajes 
     var mN=document.getElementById("mNombre");
     var mA=document.getElementById("mApellido");
     var mF=document.getElementById("mFecha");
     var mP=document.getElementById("mPais");
     var mC=document.getElementById("mCodigo");
     var mNi=document.getElementById("mNick");
     var mPas=document.getElementById("mPassword");
     var mEm=document.getElementById("mEmail");
     var mD=document.getElementById("mDispon");
     
     
 //valido nombre
        if(nomvalor===''){
            info.push(nom);
            mN.innerHTML="<font color='red'><h6 color='red'>Escriba su(s) nombre(s)</h6></font>";
        }else{
               if(!nomvalor.match(nameRegex)){
                   info.push(nom);
                   mN.innerHTML="<font color='red'><h6 color='red'> Invalido,solo caracteres</h6></font>";
               }
           }
        
 //validar apellido
        if(apevalor===''){
            info.push(ape);
            mA.innerHTML="<font color='red'><h6 color='red'>Escriba su(s) apellido(s)</h6></font>";
        }else{
               if(!apevalor.match(nameRegex)){
               info.push(ape);
               mA.innerHTML="<font color='red'><h6 color='red'>Invalido,solo caracteres</h6></font>";
               }
          }
  //validar fecha
  if(ddvalor < 1 || ddvalor >31 || (!ddvalor.match(dateDiaRegex))){
        info.push(dd); 
         mF.innerHTML="<font color='red'><h6 color='red'>Fecha incorrecta</h6></font>";
     }
     
     
 //el mes es menor de 1 o mayor de cero  o que no cumpla la epxresion(que sea solo digitos y solo 2 digitos)
     if(mmvalor < 1 || mmvalor >12 || (!mmvalor.match(dateDiaRegex))){
        info.push(mm); 
     mF.innerHTML="<font color='red'><h6 color='red'>Fecha incorrecta</h6></font>";
     }
     
 //si el año es mayor que el año del sistema o no cumple la expresion(que sea solo digitos y sea solo 4 digitos).
     if(!aavalor.match(dateAnioRegex)){ 
         info.push(aa);
          mF.innerHTML="<font color='red'><h6 color='red'>Fecha incorrecta</h6></font>";
      }
           
 //validar pais
      if(paisvalor===''){
          info.push(pais);
          mP.innerHTML="<font color='red'><h6 color='red'>Introduzca Pais</h6></font>";
      } else{
              if(paisvalor.length <=3){
                   info.push(pais);
                   mP.innerHTML="<font color='red'><h6 color='red'>Nombre de Pais incorrecto</h6></font>";
               }
      }
   
 //validar  codigo postal
      if(cpvalor===''){
           info.push(cp);
           mC.innerHTML="<font color='red'><h6 color='red'>Introduzca Codigo Postal</h6></font>";
          
      }else{
            if(!cpvalor.match(cpRegex)){
                info.push(cp);
                mC.innerHTML="<font color='red'><h6 color='red'>CP incorrecto</h6></font>";
            }
       }
 
 //validar nick
       if(nickvalor.length<=3){
                 info.push(nick);
                 mNi.innerHTML="<font color='red'><h6 color='red'>Introduzca Nick > 3 caracteres</h6></font>";
             }
        
            
 //validar contraseñas
       if((!contras1valor.match(contrasRegex)) || (contras1valor !== contras2valor)){
                 alert("e entrado a validar contraseña");
                 info.push(contras1);
                 info.push(contras2);
                 mPas.innerHTML="<font color='red'><h6 color='red'>Contraseña incorrecta,5 a 10 caracteres alfanumericos</h6></font>";
       }
       
 //validar emails
        if((!mail1valor.match(mailRegex)) || (mail1valor !== mail2valor)){
            alert("a entrado en validar mail");
            info.push(mail1);
            info.push(mail2);
            mEm.innerHTML="<font color='red'><h6 color='red'>Incorrecto vuelva a intentarlo</h6></font>";
         }
    
 //validar disponible...controlo que no este vacio
         if(!dispvalor.length > 0){
             alert("e estrado a validar disponibilidad");
             info.push(disp);
             mD.innerHTML="<font color='red'><h6 color='red'>Porfavor introduzca su disponibilidad</h6></font>";
         }
      
    
    
 //si el array contiene algo ,lo recorro y pinto las cajas
            alert(info.length);
            if(info.length > 0){
                for(x=0;x < info.length;x++){
                     if(x===0){
                        info[x].value='';
                        info[x].focus();//posiciono el foco en el primer elemento
                        info[x].style.borderColor='red';
                      }else{
                          info[x].value='';
                          info[x].style.borderColor='red'; 
                          }
                }
 // digo que el boton enviar esta desactivado  porque confirmar es false ya que hay errores
             confirmar=false;   
            }
            
        //devuelvo confimar    
     return confirmar;
     
    }
