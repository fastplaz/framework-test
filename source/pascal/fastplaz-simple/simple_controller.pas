unit simple_controller;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, html_lib, fastplaz_app, fpjson, json_lib, HTTPDefs, 
    fastplaz_handler, database_lib, string_helpers, dateutils, datetime_helpers;

type
  TSimpleController = class(TMyCustomController)
  private
  public
    constructor CreateNew(AOwner: TComponent; CreateMode: integer); override;
    destructor Destroy; override;

    procedure Get; override;
    procedure Post; override;
  end;

implementation

uses theme_controller, common;

constructor TSimpleController.CreateNew(AOwner: TComponent; CreateMode: integer
  );
begin
  inherited CreateNew(AOwner, CreateMode);
end;

destructor TSimpleController.Destroy;
begin
  inherited Destroy;
end;

// GET Method Handler
procedure TSimpleController.Get;
begin
  Response.Content:= 'Hello world from Simple FastPlaz';
end;

// POST Method Handler
procedure TSimpleController.Post;
begin
  Response.Content := 'This is POST Method';
end;

end.

