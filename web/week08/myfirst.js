

// our file is given to us a command line arguement
file = process.argv[2];




const fs = require('fs') 
  
fs.readFile(file,function cbread(error,data){ 
    if (error)
    throw error;

    //needs to be cast to string
    data = data.toString();
    //console.log(data);
    split = data.split('\n');
    //this minus 1
    console.log(split.length-1);


});



  


