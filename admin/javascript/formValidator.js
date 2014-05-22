
	function validateForm()
	{
	var a=document.forms["form1"]["po_id"].value;
	var b=document.forms["form1"]["supplier_name"].value;
	var c=document.forms["form1"]["order"].value;
	var d=document.forms["form1"]["ord_qty"].value;
	var e=document.forms["form1"]["i_unit"].value;
	var f=document.forms["form1"]["i_price"].value;

	if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
	  {
	  alert("Select items to purchase!");
	  return false;
	  }
	