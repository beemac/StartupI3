/*
	Copyright (c) 2004-2011, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojox.validate.isbn"]){ //_hasResource checks added by build. Do not use _hasResource directly in your code.
dojo._hasResource["dojox.validate.isbn"] = true;
dojo.provide("dojox.validate.isbn");
// summary: Provides ISBN validation functions in `dojox.validate`
//
dojox.validate.isValidIsbn = function(/* String */value) {
	// summary: Validate ISBN-10 or ISBN-13 based on the length of value
	// value: String
	//		An ISBN to validate
	// returns: Boolean
	var len, sum = 0, weight;
	if(!dojo.isString(value)){
		value = String(value);
	}
	value = value.replace(/[- ]/g,''); //ignore dashes and whitespaces
	len = value.length;

	switch(len){
		case 10:
			weight = len;
			// ISBN-10 validation algorithm
			for(var i = 0; i < 9; i++){
				sum += parseInt(value.charAt(i)) * weight;
				weight--;
			}
			var t = value.charAt(9).toUpperCase();
			sum += t == 'X' ? 10 : parseInt(t);
			return sum % 11 == 0; // Boolean
			break;
		case 13:
			weight = -1;
			for(var i = 0; i< len; i++){
				sum += parseInt(value.charAt(i)) * (2 + weight);
				weight *= -1;
			}
			return sum % 10 == 0; // Boolean
			break;
	}
	return false;
}

}
