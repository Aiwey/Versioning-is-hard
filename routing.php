<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homepage'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions


Utils::addRoute('homepage', 'HomepageCtrl');
Utils::addRoute('trackList', 'trackListCtrl');
Utils::addRoute('admin', 'adminCtrl',['admin']);
Utils::addRoute('adminUsers', 'adminCtrl',['admin']);
Utils::addRoute('adminUsers','adminCtrl',['admin']);
Utils::addRoute('userDelete','adminCtrl',['admin']);

Utils::addRoute('showAddComment','commentCCtrl',   ['user','admin']);
Utils::addRoute('showComment','commentCCtrl',   ['user','admin']);
Utils::addRoute('addComment','commentCCtrl',   ['user','admin']);
Utils::addRoute('browseBands','mainCtrl',   ['user','admin']);
Utils::addRoute('browseAlbums','mainCtrl',   ['user','admin']);
Utils::addRoute('browseLabels','mainCtrl',   ['user','admin']);
Utils::addRoute('browseTracks','mainCtrl',  ['user','admin']);

//Utils::addRoute('action_name', 'controller_class_name');
//KOMANERTRZE
//Access
Utils::addRoute('register', 'LoginCtrl');
Utils::addRoute('registerShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl',      ['user','admin']);


