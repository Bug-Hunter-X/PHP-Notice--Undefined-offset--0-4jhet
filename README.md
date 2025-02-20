# PHP Notice: Undefined offset: 0

This repository demonstrates a common, yet easily overlooked, error in PHP: the "Undefined offset" notice.  This occurs when you try to access an array element using an index that doesn't exist.  Simple isset() checks on the array itself are insufficient to prevent this.

The `bug.php` file shows the erroneous code. The `bugSolution.php` file provides the corrected version.

This is a subtle bug that can be difficult to track down.  Always explicitly check for the existence of the array index before accessing it to avoid this common error.