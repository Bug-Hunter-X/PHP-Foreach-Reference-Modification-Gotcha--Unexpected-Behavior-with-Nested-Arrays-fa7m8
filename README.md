# PHP Foreach Reference Modification Gotcha

This repository demonstrates a common, yet subtle, bug in PHP related to using references within `foreach` loops.  Specifically, it highlights unexpected behavior when modifying nested or associative arrays using this approach.

The `bug.php` file shows the problematic code.  The `bugSolution.php` demonstrates a safer alternative to avoid the unexpected side effects.

**Problem:**

Modifying array elements by reference within a `foreach` loop can lead to unintended consequences when the array has nested arrays or is associative.

**Solution:**

The recommended approach is to iterate over the keys and use the keys to access the elements instead of using references in the foreach loop.