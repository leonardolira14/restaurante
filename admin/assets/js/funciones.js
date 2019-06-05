function Help(){
	var that=this;
	that.senddata=function(url,data,callback){
		var tp=JSON.stringify(data);
		$.post(url,{datos:tp},function(resp){
			callback(JSON.parse(resp) )
		})
	}
}
var help=new Help(); 