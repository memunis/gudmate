var appPort = process.env.PORT || 4444;

// Librairies

var express = require('express'),
  app = express();
var http = require('http'),
  https = require("https"),
  server = http.createServer(app);


app.use(express.static(__dirname));

server.listen(appPort);

console.log("Server listening on port " + appPort);