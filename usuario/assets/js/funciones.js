function Help(){
	var that=this;
	that.senddata=function(url,data,callback){
		var tp=JSON.stringify(data);
		$.post(url,{datos:tp},function(resp){
			callback(JSON.parse(resp) )
		})
	}
	that.menu_close=function(){

		$('.cont-menu').toggle("linear",function(){
			if($(".cont-principal").hasClass("active")){
				$(".cont-principal").removeClass("active")
			}else{
				$(".cont-principal").addClass("active")
			}

		});	
		
	}
}
var help=new Help(); 