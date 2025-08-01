/*
For more info on the algorithm: http://en.wikipedia.org/wiki/Verhoeff_algorithm
by Sergey Petushkov, 2014
*/

// multiplication table d
var d=[
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
    [1, 2, 3, 4, 0, 6, 7, 8, 9, 5], 
    [2, 3, 4, 0, 1, 7, 8, 9, 5, 6], 
    [3, 4, 0, 1, 2, 8, 9, 5, 6, 7], 
    [4, 0, 1, 2, 3, 9, 5, 6, 7, 8], 
    [5, 9, 8, 7, 6, 0, 4, 3, 2, 1], 
    [6, 5, 9, 8, 7, 1, 0, 4, 3, 2], 
    [7, 6, 5, 9, 8, 2, 1, 0, 4, 3], 
    [8, 7, 6, 5, 9, 3, 2, 1, 0, 4], 
    [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
];

// permutation table p
var p=[
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9], 
    [1, 5, 7, 6, 2, 8, 3, 0, 9, 4], 
    [5, 8, 0, 3, 7, 9, 6, 1, 4, 2], 
    [8, 9, 1, 6, 0, 4, 3, 5, 2, 7], 
    [9, 4, 5, 3, 1, 2, 6, 8, 7, 0], 
    [4, 2, 8, 6, 5, 7, 3, 9, 0, 1], 
    [2, 7, 9, 3, 8, 0, 6, 4, 1, 5], 
    [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
];

// inverse table inv
var inv = [0, 4, 3, 2, 1, 5, 6, 7, 8, 9];

// converts string or number to an array and inverts it
function invArray(array){
    
    if (Object.prototype.toString.call(array) == "[object Number]"){
        array = String(array);
    }
    
    if (Object.prototype.toString.call(array) == "[object String]"){
        array = array.split("").map(Number);
    }
    
	return array.reverse();
	
}

// generates checksum for Verhoeff Algorithm to validate the aadhar number
function generate(array){
    	
	var c = 0;
	var invertedArray = invArray(array);
	
	for (var i = 0; i < invertedArray.length; i++){
		c = d[c][p[((i + 1) % 8)][invertedArray[i]]];
	}
	
	return inv[c];
}

// validates checksum for Verhoeff Algorithm to validate the aadhar number
function validate(array) {
    
    var c = 0;
    var invertedArray = invArray(array);
    
    for (var i = 0; i < invertedArray.length; i++){
    	c=d[c][p[(i % 8)][invertedArray[i]]];
    }

    return (c === 0);
}

function validateAadharNumber(aadharNumber){
	isValidAadhar = /^[0-9]{12}$/.test(aadharNumber)
    if(isValidAadhar){
       isValidAadhar = validate(aadharNumber);
    }
    return isValidAadhar;
}