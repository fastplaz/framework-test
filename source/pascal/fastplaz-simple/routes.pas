unit routes;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, fpjson, fastplaz_handler;

implementation

uses info_controller, simple_controller;

initialization
  Route[ 'info'] := TInfoModule;
  Route[ '/'] := TSimpleController; // Main Controller

end.

