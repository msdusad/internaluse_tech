<!-- 
Go Back History Didnot work

// <script type="text/javascript">
//         window.history.forward();
//         function noBack()
//         {
//             window.history.forward();
//         }
// </script>
// <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
//    <a href="index.php">sdfg</a> -->

<?php
$arr1=[];
$arr2=[];
$arr1[1]="First";
$arr2[2]=$arr1;
$arr5=[];
$arr5['M']="Singh";
$arr6['mahender']=$arr5;
var_dump($arr2);
echo "<br>";
var_dump($arr6);
echo "<br>";


$array = array("my", "litte", "array", 88);

$serialized_array = serialize($array); 
$unserialized_array = unserialize($serialized_array); 

var_dump($serialized_array); // gives back a string, perfectly for db saving!
var_dump($unserialized_array); //





int main()
{
 int n, c, k, space = 1;

 cout<<"\n\nEnter number of rows: ";
 cin>>n;
 space = n - 1;

  for (k = 1; k<=n; k++)
  {
    for (c = 1; c<=space; c++)
      cout<<" ";

    space--;

    for (c = 1; c<= 2*k-1; c++)
      cout<<"*";

    cout<<"\n";
  }
 
  space = 1;
 
  for (k = 1; k<= n - 1; k++)
  {
    for (c = 1; c<= space; c++)
      cout<<" ";
 
    space++;
 
    for (c = 1 ; c<= 2*(n-k)-1; c++)
      cout<<"*";
 
    cout<<"\n";
  }
 
}