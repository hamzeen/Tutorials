
Credits
--------

Before we can proceed, I would like to give credit to Ricard Marxer for his wonderful example 
for Fisica physics library. Thank you Ricard.

Pre-Requisites
--------------
1. JDK 1.5 or above
2. Ant

USAGE
-----

  Please navigate to BubbleAntBuild from your terminal/command prompt and key-in
"ant run"

  Runing the above target will result in compile, export the jar and then launch the sketch 
for you. However it still gives you the potion to run each of these targets 
(i.e. compile, jar, run or clean) individually as well. Easy as that!!


How Can I use it to build my Sketch?
-------------------------------------

  Of course, you can do it in two steps :) 

Step1:
------
Once your app is ready, export it to some platfrom 
(exporting for Windows will make things easy). This would create folder named 'source' and 'lib' 
beside the executable. Just copy and replace them inside BubblesAntBuild.

Step 2:
-------
You will have to modifiy the build.xml found inside the 'BubblesAntBuild' directory in two places to specify 
a name for the jar you wish to have for your sketch and then the fully qualified name of your Main-Class.

However, the fully qualifies name above typically involve giving the name of the main class 
(which should also be available at the source directory you copied above). As we don't normally use 
packages to hold our source files in contrast to a typical java project. So that makes it whole lot easy!


  Feel free to improve it, Thanks!

Hamzeen. H. blog.hamzeen.com | www.hamzeen.com
10:28 PM 8/17/2013
