(function () {
    let url	='../Controller/Funcionalidad.php' 
    cargarselect(url);
})()

function cargarselect(url){
      $.ajax({  
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_tipo;
                    let name = response[i].name;
                    var slectcn_str = "<option value='"+id+"'>"+name+"</option>" 
                    $('#tipo_documento').append(slectcn_str);
                }
            }
        });
    }
  
    
$('#numero_documento').keyup(function() {
    numero=$('#numero_documento').val();
    if(numero.length<=10 && numero.length>=5){
        $('#btnbuscar').prop("disabled", false);   
    }
    else{
         $('#btnbuscar').prop("disabled", true);   
    }
  
});
function buscar(){
    $('#procesador').val('2')   
    let url	='../Controller/Funcionalidad.php'  
    let cadena	=$("#frmBusqueda").serialize() 
    ajax(url,cadena)
}
function ajax(url,cadena){ 
  $.ajax({
		async:true,  
			type:"POST",  
			dataType:"html",    
			contentType: "application/x-www-form-urlencoded",
			beforeSend: function(){ 
              
            },
			url:url,  
			data:cadena, 
			success: function(data){ 
			
	
                return false;
					},
			error: function(){
        
			}
            
            
	});
    
}