var express = require('express');
var session = require('express-session');
//var User = require('./models/user');
var hbs = require('express-handlebars'); 
var path = require('path'); 

var app = express();
app.set('port', 2000);
