rep = [];

createRep = function(id,name,state,age){
  this.id = id;
  this.age = age;
  this.name = name;
  this.state = state;

}

var x = new createRep(1,"x","IN",2);


console.log(x.name);
