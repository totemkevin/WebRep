var uc_name,uc_describtion;
var name_list = new Array();
var description_list = new Array();
var result="";
function analysis(){
	for(var i = 0 ; i<lines.length ; i++){
		if(lines[i].match(/UML:UseCase xmi.id /)){
			uc_name = lines[i+1].split("name = '")[1].split("' isSpecification")[0];
			name_list.push(uc_name);
		}
		else if(lines[i].match(/<UML:TaggedValue.dataValue>/)){
			uc_describtion = lines[i].split("</UML:TaggedValue.dataValue>")[0].split("<UML:TaggedValue.dataValue>")[1];
			result+="<div class=\"list_item\"><span class=\"uc_id\">"+uc_name+"</span><span class=\"description\">"+uc_describtion+"</span></div>";
			description_list.push(uc_describtion);
		}
	}

	$(".results").html(result);
	$("#files").val("");
	getData(name_list,description_list);
	closeLightBox();
}