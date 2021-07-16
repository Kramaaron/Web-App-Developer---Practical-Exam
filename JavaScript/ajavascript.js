var camelCase = "TheQuickBrownFoxJumpsOverTheLazyDog";
var camel = camelCase.toUpperCase(); //the Strings are all converted to Uppercase
var tmp = camel[0]; //array[0] will be only capitalized on variable tmp
for (i = 1; i < camelCase.length; i++) //checks the length of string
{
   var hasnextcap = false;
   var hasprevcap = false;
   var charValue = camelCase.charCodeAt(i);

   if (charValue > 64 && charValue < 91)
   {
      if (camelCase.length > i + 1)
      {
         var next_charValue = camelCase.charCodeAt(i + 1);
         if (next_charValue > 64 && next_charValue < 91) //checks if there is a next capital letter
            hasnextcap = true;
      }

      if (i - 1 > -1)
      {
         var prev_charValue =  camelCase.charCodeAt(i - 1);
         if (prev_charValue > 64 && prev_charValue < 91) //checks if there is a previous capital letter
            hasprevcap = true;
      }


      if (i < camelCase.length-1 && (!(hasnextcap && hasprevcap || hasprevcap) || (hasprevcap && !hasnextcap))) //checks if the string has a word, if then it will execute the add space between words
         tmp += " ";
    }
   tmp += camelCase[i].toLowerCase(); //converts strings onto lowercase from array 1 up to n.
}
console.log(tmp); //displays the string on terminal by typing node Javascript/ajavascript.js