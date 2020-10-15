var json = JSON.parse('{"h":["username","hair_color","height"],"d":[["ali","brown",1.2],["marc","blue",1.4],["joe","brown",1.7],["zehua","black",1.8]]}');

console.log(json);

function unmini_json(json) {
  var new_json = [];
  for (var i in json.d) {
    new_json.push({"username" : json.d[i][0], "hair_color" : json.d[i][1], "height" : json.d[i][2]});
  }
  return new_json
}

console.log(unmini_json(json));
