function setupGrid(gridx, pager) { 
//gridx: id of the div to contain the grid
//pager: id of the div to contain pager

			cNames=['pID','名稱','dID','捐獻項目','ptID','捐獻名稱','刻名狀態','捐獻者','人數','定價','說明','圖檔狀態','--'];
			cModel=[
				{name:'ID',index:'ID', width:40, editable: false},
				{name:'name',index:'name', width:100, editable: true},
				{name:'dID',index:'dID', width:60, editable: true},
				{name:'dName',index:'dName', width:100, editable: false},
				{name:'ptID',index:'ptID', width:60, editable: true},
				{name:'ptName',index:'ptName', width:100, editable: false},
				{name:'sold',index:'sold', width:60, editable: false},
				{name:'uName',index:'uName', width:100, editable: false},
				{name:'cnt',index:'cnt', width:40, editable: false},
				{name:'listPrice',index:'listPrice', width:100, editable: true},
				{name:'note',index:'note', width:200, editable: true},
				{name:'hasImg',index:'hasImg', width:60, editable: false},
				{name:'act',index:'act', width:100, editable: false, sortable: false}
				];
			caption= "產品資料表";
			navOptions={search:false,edit:false,add:false};


jQuery('#'+gridx).jqGrid({
    // the url parameter tells from where to get the data from server
    // adding ?nd='+new Date().getTime() prevent IE caching
    url:'jqGridJSON.php', //url to receive request
    // datatype parameter defines the format of data returned from the server
    // in this case we use a JSON data
    datatype: "json",
    // colNames parameter is a array in which we describe the names
    // in the columns. This is the text that apper in the head of the grid.
    colNames: cNames,
    // colModel array describes the model of the column.
    // name is the name of the column,
    // index is the name passed to the server to sort data
    // note that we can pass here nubers too.
    // width is the width of the column
    // align is the align of the column (default is left)
    // sortable defines if this column can be sorted (default true)
    colModel: cModel,
    // pager parameter define that we want to use a pager bar
    // in this case this must be a valid html element.
    // note that the pager can have a position where you want
    pager: jQuery('#'+pager), //the div to contain pager
//	toppager:true,
    // rowNum parameter describes how many records we want to
    // view in the grid. We use this in example.php to return
    // the needed data.
    rowNum:10,
    // rowList parameter construct a select box element in the pager
    //in wich we can change the number of the visible rows
//    rowList:[10,20,30],
    // sortname sets the initial sorting column. Can be a name or number.
    // this parameter is added to the url
//    sortname: 'zip',
    //viewrecords defines the view the total records from the query in the pager
    //bar. The related tag is: records in xml or json definitions.
    viewrecords: true,
	gridview: false,
    //sets the sorting order. Default is asc. This parameter is added to the url
//	sortname: sortName,
    sortorder: "desc",
    caption: caption,
//	width: 600,
	height: "100%",
	editurl: "jqGridUpdater.php", //url to receive edit request
/*	onSelectRow: function(id){
		if(id){
			if (id!==lastsel){
			jQuery('#list2').jqGrid('restoreRow',lastsel);
			jQuery('#list2').jqGrid('editRow',id,true);
			}
			lastsel=id;
		}
	},*/
//	reloadAfterSubmit: true,
	subGrid: false,
gridComplete: function() {
// on grid complete function
	},
loadComplete: function(data){
// on load function
}
});

//set up pager format
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
		{ closeOnEscape: true, multipleSearch: true, 
         closeAfterSearch: true, multipleGroup:false },//search options
		{} // view options
	); //prm pagerID, NavOptions, prmEdit, prmAdd, prmDel, prmSearch, prmView);
	
}