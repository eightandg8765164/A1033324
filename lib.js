function loadAjax(aaa,bbb,ccc){
      if(window.XMLHttpRequest){
         xmlhttp=new XMLHttpRequest();
      }else{
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange=function(){
         if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById(ccc).innerHTML=xmlhttp.responseText;
         }
      }

      xmlhttp.open(aaa,bbb,true);
      xmlhttp.send();

   }