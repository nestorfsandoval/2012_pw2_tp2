/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   $(function(){
     $('#login').css("display", "none");
     
     $('#loguearse').bind('click',function(){
         $('#loginReg').css("display", "none");
         $('#login').css("display", "block");
     });
     
      
   });

