<?php   
//WORKING WITH FILES SYSTEM IN PHP

/*==================
=>scandir()
->list the files and directories in a given path
->Returns an array of filenames on success, or false on failure. If directory is not a directory, then boolean false is returned, 
and an error of level E_WARNING is generated. 
=>__DIR__ is a magic constant that specifies the current path in a directories
==================*/
$dir =scandir(__DIR__);
var_dump($dir);
//checking if workingwithfiles.php in this directory is a file at index 33
var_dump(is_file($dir[33])) . "<br>"; //output: bool(true)
//checking if workingwithfiles.php in this directory is a directory
var_dump(is_dir($dir[33])) . "<br>";//output:bool(false) 
//current directory, represented with " . " at index 0
var_dump($dir[0]);
//parent directory, represented with " .. " at index 1
var_dump($dir[1]);

echo "<br>";
echo "<hr>";
/*===================
=>mkdir(path, mode, recursive, context)
->creates a directory specified by a pathname. 
=>rmdir(dir, context) 
->removes an empty directory.
=====================*/
//created a folder or directory foo
//-> mkdir('foo');

//deleted the directory foo, it must be an empty directory, unless we get a warning
//rmdir('foo'); 

//created a folder or directory foo/bar with a recursive
//-> mkdir('foo/bar', recursive:true);

//deleted the directory bar
//-> rmdir('foo/bar');

//deleted the directory foo
//-> rmdir('foo');


//checking is a file exist and its size
// if(file_exists('foo.txt')
// ){
//     echo filesize('foo.txt');
// }else{
//     echo 'file not found';
// }//output: 'file not found';  i havent created the file here

echo "<br>";
echo "<hr>";
//for better performance php will cache the return values of some of the files related functions
//created a foo.txt file manually, with hello world in it, filesize is 11
//i want to check the file size
// if(file_exists('foo.txt')
// ){
//     echo filesize('foo.txt');
// }else{
//     echo 'file not found';
// }//output: filesize == 11

//i deleted the hello world in it, the filesize is equal to zero
//so i decided to use file_put_contents() function put some text in it
//the filesize returned 0
//this is because result of the first file was cached, when i call it again, it is printing the value of the previous file
// if(file_exists('foo.txt')
// ){
//     echo filesize('foo.txt');

//     file_put_contents('foo.txt', "Hello World");
//     //this will clear cache and return the desired output
//     clearstatcache();
//     echo filesize('foo.txt');
// }else{
//     echo 'file not found';
// }

echo "<br>";
echo "<hr>";

//================
//fopen(), fgets(), fgetscsv()
//==============
//this returns false when the file does not exist
//the result of fopen is a called a resource
//resource: The resource type is a special data type that represents a reference to an external resource such as a file, database connection, network socket, image, or any other system-level resource.
$file = fopen('foo.txt', 'r');
//var_dump($file); 

//Reading files line by line
// while(($line = fgets($file)) !== false){ 
//     echo $line . "<br>";
// }
// fclose($file);

//reading csv files
while(($line = fgetcsv($file)) !== false){ 
    print_r($line);
}
fclose($file);

//using file_put_contents() to write files
///if file does not exist it would create one
//if called again it will overwrite the existing data
file_put_contents('bar.txt', 'hello');
//to append with existing data use 
file_put_contents('bar.txt', 'hello', FILE_APPEND);

//to delete files, use 
unlink('bar.txt');

//copy files. copying foo.txt to bar.txt
copy('foo.txt', 'bar.txt');


//WORKING WITH FILES IN PHP
/*
|====================
|XML and JSON
|====================
*/

include 'helper.php';

//JSON
//The json_decode() function is used to decode or convert a JSON object to a PHP object.
// $json = '{
//      "data": {
//        "linkedin ": "https://www.linkedin.com/in/akinnuoye-samuel97/",
//       "twitter ": "https://www.x.com/in/akinnuoye-samuel97/",
//       "github ": "https://www.github.com/in/akinnuoye-samuel97/",
//       "facebook ": "https://www.linkedin.com/in/akinnuoye-samuel97/"     }
//    }';

//Reading json files
//prettyPrintarray(json_decode($json, true)) . "<br>";
/* $array = json_decode($json, true);
$data = $array['data'];
foreach($data as $key => $value){
     //echo $key . $value . PHP_EOL;
}
*/

//writing in json
// $json = [
//      "data" => [
//        "linkedin " =>  "https://www.linkedin.com/in/akinnuoye-samuel97/",
//       "twitter " => "https://www.x.com/in/akinnuoye-samuel97/",
//       "github " => "https://www.github.com/in/akinnuoye-samuel97/",
//       "facebook " => "https://www.linkedin.com/in/akinnuoye-samuel97/"     
// ]
// ];
// $json = json_encode($json, true);
// echo $json


//READING XML FILES
$xml = '<?xml version="1.0" encoding= "UTF-8" ?>
<accounts>
<account type="twitter">https://www.x.com/in/akinnuoye-samuel97/</account>
<account type="Linkedin">https://www.linkedin.com/in/akinnuoye-samuel97/</account>
<account type="Github">https://www.github.com/in/akinnuoye-samuel97/</account>
<account type="facebook">https://www.facebook.com/in/akinnuoye-samuel97/</account>
</accounts>';

//using DOM
//we need to create an object first
$dom = new DOMDocument();
// //then load the xml info, could be a file or from api
$dom->loadXML($xml);
//we then get the tag we want to access 
$accounts = $dom->getElementsByTagName(qualifiedName: 'account');
// //we use a foreach loop to access each nodes in the account tag
foreach( $accounts as $account ) {
    $name = $account->getAttribute('type');
    $link = $account->nodeValue;
    echo "connect with me on $name here is the link $link" . "<br>";
}

//parsing using simplexmlelement method
// $accounts = new  SimpleXMLElement( $xml );
// foreach ( $accounts as $account ) {
//     $name = $account['type'];
//     $link = $account;
//     echo "connect with me on $name here is the link $link" . "<br>";
// };


//writing in xml
// $accounts = new SimpleXMLElement('<?xml version="1.0" encoding= "UTF-8" ?><accounts></accounts>');
// $accounts->addChild('account','https://www.x.com/in/akinnuoye-samuel97/')->addAttribute('type', 'Twitter');

// //saving xml as string
// $myfinal =  $accounts->asXML();
// echo $myfinal;


































































































?>