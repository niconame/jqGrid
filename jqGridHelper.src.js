function genImgButton(bts,id,gridx) {
	var str='';
	for (var i=bts.length-1;i>=0;i--) { //use the buttons parameter buttons
		var ch=bts.charAt(i);//返回指定位置的字
		switch (ch) {
			case 'E':
		str = str + "<img src='images/icon_edit.gif' title='編輯' onClick=\"jQuery('#" + gridx + "').editRow('" + id + "')\">";
				break;
			case 'D':
		str = str + "<img src='images/icon_delete.gif' title='刪除' onClick=\"$('#" + gridx + "').delGridRow('" + id + "')\">";
				break;
			case 'C':
		str = str + "<img src='images/icon_reload.gif' title='取消修改' onClick=\"$('#" + gridx + "').restoreRow('" + id + "')\">";
				break;
			case 'S':
		str = str + "<img src='images/icon_save.gif' title='儲存修改' onClick=\"$('#" + gridx + "').saveRow('" + id + "')\">";
				break;
			case 'V':
				var pos = getLeftLowerStrPos(bts,i-1);
				if (pos < i) {
					var func = bts.substring(pos,i);
		str = str + "<img src='images/icon_view.gif' title='查看' onClick=\"" + func + "('" + id + "')\">";
				}
				break;
	default: //ignore any unrecognized chars
		}
	}
//	alert(str);
	return str;
}

function getLeftLowerStrPos(str, startAt) {
	for (i=startAt;i>=0;i--) {
		if (! isLower(str.charAt(i))) return i+1;
	}
	return i+1;
}

function isLower(ch) {
	return (ch >='a' && ch <='z');
}

function initGrid(div, URL, updateURL, cNames, cModel, caption, buttons, navOptions) {
	var gridx='jggdtbl'+ Math.round(Math.random()*10000);
	var pager='jqgdpgr'+ Math.round(Math.random()*10000);
$('#'+div).html("<table id='" + gridx +"'></table><div id='" + pager + "'></div>");
jQuery('#'+gridx).jqGrid({
    // the url parameter tells from where to get the data from server
    // adding ?nd='+new Date().getTime() prevent IE caching
    url: URL,//資料位置
    // datatype parameter defines the format of data returned from the server
    // in this case we use a JSON data
    datatype: "json",//資料類型
    // colNames parameter is a array in which we describe the names
    // in the columns. This is the text that apper in the head of the grid.
    colNames: cNames,//欄位名稱
    // colModel array describes the model of the column.
    // name is the name of the column,
    // index is the name passed to the server to sort data
    // note that we can pass here nubers too.
    // width is the width of the column
    // align is the align of the column (default is left)
    // sortable defines if this column can be sorted (default true)
    colModel: cModel,//設定資料區的Schema，為一個Obj，或用JSON直接描述
    // pager parameter define that we want to use a pager bar
    // in this case this must be a valid html element.
    // note that the pager can have a position where you want
    pager: jQuery('#'+pager),//取得目前頁碼，必須是jQuery物件，指向html中設定pager的div元素
//	toppager:true,
    // rowNum parameter describes how many records we want to
    // view in the grid. We use this in example.php to return
    // the needed data.
    //rowNum:20,//頁面顯示的列數
    // rowList parameter construct a select box element in the pager
    //in wich we can change the number of the visible rows
    rowList:[10,20,30],
    // sortname sets the initial sorting column. Can be a name or number.
    // this parameter is added to the url
//    sortname: 'zip',
    //viewrecords defines the view the total records from the query in the pager
    //bar. The related tag is: records in xml or json definitions.
    viewrecords: true,
	gridview: false,
    //sets the sorting order. Default is asc. This parameter is added to the url
//	sortname: sortName,
    sortorder: "asc",//資料排序升或降
    caption: caption,//標題名稱
//	width: 600,
	height: "100%",
	editurl: updateURL,
//	reloadAfterSubmit: true,
gridComplete: function() { //setup the custom buttons
		var ids = jQuery('#'+gridx).jqGrid('getDataIDs');
		for(var i=0;i < ids.length;i++){ 
			var cl = ids[i];
			var be="";
			be = genImgButton(buttons,cl,gridx);
			jQuery('#'+gridx).jqGrid('setRowData',cl,{act:be}); 
		}
	}
});

	jQuery("#"+gridx).jqGrid('navGrid','#'+pager,navOptions,
		{}, // edit options
		{ //parameters for Add
			closeAfterAdd: true,
			reloadAfterSubmit: false,
			afterSubmit: function (response,postdata) {
				id=$.parseJSON(response.responseText).id;
				return [true, '', id];
			}
		},
		{}, //del options
		{},//search options
		{} // view options
	); //prm pagerID, NavOptions, prmEdit, prmAdd, prmDel, prmSearch, prmView);

	return gridx;
}

