function myFunc() {
  if (!isset($myArray[0])) {
    return null; // Handle the case where the array is empty or the index is not set
  }
  // ... rest of your function
}

// Alternative solutions:

//Using array_key_exists
if (array_key_exists(0, $myArray)){
  //access $myArray[0]
}

//Using empty()
if (!empty($myArray) && array_key_exists(0, $myArray)){
  //Access $myArray[0]
}