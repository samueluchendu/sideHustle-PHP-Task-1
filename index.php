<?php 

   //  SOLUTION TO PHP TASK 1

  function getNumberRange($start, $end) {
     
    if(is_numeric($start) && is_numeric($end)){
      
        for ($i = $start; $i <= $end; $i++) {
            $myArray[] = $i;
                 
         }
        
        
      return print_r($myArray)."<br>";
   
    
    }else{
      
      return "Arguements entered are not valid numbers";
      
    }
	 
  
  }

   getNumberRange(2,12)."<br>";

 
 
//  SOLUTION TO PHP TASK 2

  function sumArrayNumbers(array $myArray){
    
         $result = 0;

        foreach ($myArray as $array) {
          
          if(gettype($array) == "integer"){

              $result += $array;
              
          }else{
            
            return "Array inputted does Not contain a valid integer value";
          }
          
        }
        
        return $result;
        
  }



echo sumArrayNumbers([1,5,10,4]);
  
  
  
  
  
  
  
  
  
  
  
  
  
?>