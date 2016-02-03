$(document).ready(function(){
	Populate(); 
	console.log('Init ok'); 
	$('#convertisseur input').keyup(function(){
		var valToConvert=$(this).val(); 
			var ifDecimale=EvalAny(valToConvert,10); 
			var ifBinaire=EvalAny(valToConvert,2);
			var ifOctale=EvalAny(valToConvert,8);
			var ifHexadecimale=EvalAny(valToConvert,16);
		
		if($(this).is("#ConvertBinaire")){ var NewValue=ifBinaire; }
		if($(this).is("#ConvertDecimale")){ var NewValue=ifDecimale; }
		if($(this).is("#ConvertOctale")){ var NewValue=ifOctale; }
		if($(this).is("#ConvertHexadecimale")){ var NewValue=ifHexadecimale; }	
		console.log(NewValue); 
		$("#ConvertBinaire").val(NewValue[2]);
		$("#ConvertOctale").val(NewValue[8]);
		$("#ConvertDecimale").val(NewValue[10]);
		$("#ConvertHexadecimale").val(NewValue[16]);
	});
}); 

function Populate() {
	hex = new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");
	
}
function CKparseInt(n, r){
	for (var i = 0; i < n.length; ++i){
		if (n.charAt(i) >= r){
			return 0;
		}
	}
	
	if (isNaN(M = parseInt(n, r))){ return 0; }
	return M;
}
function DecimaltoAnother(A, radix){ 
	s = "";
	while (A >= radix) {
		s += hex[A % radix]; // remainder
		A = Math.floor(A / radix); // quotient, rounded down
	}
	return transpose(s += hex[A]);
}
function transpose(s) { // string reversal
	N = s.length;
	for (i = 0,t = ""; i < N; i++)
	t += s.substring(N-i-1, N-i); // s.substring(from, to)
	return t;
}
function EvalAny(item, r){ // convert item.value using radix
	M = CKparseInt(item, r); // check this one
	var tableValeur = []; 
	/* for (var i = 0, MyForm = document.forms[0]; i < MyForm.length; ++i) // re-evaluate all
		MyForm.elements[i].value = DecimaltoAnother(M, MyForm.elements[i].name.substr(1,3)); */
	 tableValeur[10]=DecimaltoAnother(M, '010'); 
	 tableValeur[2]=DecimaltoAnother(M, '002'); 
	 tableValeur[16]=DecimaltoAnother(M, '016'); 
	 tableValeur[8]=DecimaltoAnother(M, '008'); 
	 return tableValeur; 
}