<!-- 
PHP Array_Splice()
The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.

Syntax
array_splice(array, start, length, array)
Parameter Values
Parameter	Description
array	     Required. Specifies an array
start          Required. Numeric value. Specifies where the function will start removing elements. 0 = the first element. If this value is set to a negative number, the function will start that far from the last element. -2 means start at the second last element of the array.Required. Numeric value. Specifies where the function will start removing elements. 0 = the first element. If this value is set to a negative number, the function will start that far from the last element. -2 means start at the second last element of the array.

length	          Optional. Numeric value. Specifies how many elements will be removed, and also length of the returned array. If this value is set to a negative number, the function will stop that far from the last element. If this value is not set, the function will remove all elements, starting from the position set by the start-parameter.
array	              Optional. Specifies an array with the elements that will be inserted to the original array. If it's only one element, it can be a string, and does not have to be an array.
 
Return Value:	Returns the array consisting of the extracted elements

 -->
 <?php 
 $color = ['red','green','blue','yelllow','brown'];
 $fruit = ['orange ','apple'];
//array_splice($color,1,-1);
//array_splice($color,2,2,$fruit);
/* -----------add new elements in the end of $color with count method ------------- */
array_splice($color,count($color),0, $fruit);


echo"<pre>";
print_r($color)."<br>";
echo"<pre>";
 
 ?>