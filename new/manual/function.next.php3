<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.current.php3', 'current'),
  'next' => array('function.prev.php3', 'prev'),
  'up'   => array('ref.array.php3', 'Array Functions'),
  'toc'  => array(
    array('ref.array.php3#I(REF.ARRAY)C(1,TITLE)', ''),
    array('function.arsort.php3', 'arsort'),
    array('function.asort.php3', 'asort'),
    array('function.count.php3', 'count'),
    array('function.sizeof.php3', 'sizeof'),
    array('function.current.php3', 'current'),
    array('function.next.php3', 'next'),
    array('function.prev.php3', 'prev'),
    array('function.key.php3', 'key'),
    array('function.reset.php3', 'reset'),
    array('function.rsort.php3', 'rsort'),
    array('function.sort.php3', 'sort'),
    array('function.end.php3', 'end'))));
manualHeader('next');
?><H1
>next</H1
><P
>next -- advance the internal array pointer</P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>mixed next(array array);<P
>     Returns the array element in the next place that's pointed by the
     internal array pointer, or false if there are no more elements.
  
    </P
><P
>     <B
CLASS="FUNCTION"
>next()</B
> behaves like <A
HREF="function.current.php3"
><B
CLASS="FUNCTION"
>current()</B
></A
>,
      with one difference.  It advances the internal array pointer one
      place forward before returning the element.  That means it
      returns the next array element and advances the internal array
      pointer by one.  If advancing the internal array pointer results
      in going beyond the end of the element list,
      <B
CLASS="FUNCTION"
>next()</B
> returns false.

    </P
><P
>     See also:
     <A
HREF="function.current.php3"
><B
CLASS="FUNCTION"
>current()</B
></A
>
     <A
HREF="function.end.php3"
><B
CLASS="FUNCTION"
>end()</B
></A
>
     <A
HREF="function.prev.php3"
><B
CLASS="FUNCTION"
>prev()</B
></A
>
     <A
HREF="function.reset.php3"
><B
CLASS="FUNCTION"
>reset()</B
></A
>
   </P
></DIV
><?php manualFooter('next');?>