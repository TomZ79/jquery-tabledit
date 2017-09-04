v1.2.7 (2017/09/04)
-------------------
- Add JavaScript RegEx (Trim Leading and Trailing)
- Change name class for row when save changes
  
  Old name -> `warningClass: 'warning'`
  
  New name -> `successClass: 'success'`
  
- Add Class for prohibiting cell editing
  
  Default -> `noEditClass: 'noedit'`
  
  E.G: `<td class="noedit">Some Text</td>`
  
 - Add Class for toolbar header column. You can use for setting `no-sort` in DataTable plugin 
 
    Default -> `toolbarHeaderClass: ''`
  
- Automatically setting CSRFToken from cookie csrftoken from sending method.
- Fix count of character for textarea element.
- Add new element type (input => date). Is not supported in Firefox, or Internet Explorer 11 and earlier versions

```
// [[column_index, input_name, input_type_date]

[4, 'col4', 'date'],
```


v1.2.6 (2017/08/14)
-------------------
- New - Different type of input Element, supported type "input", "hidden", "number", "select", "textarea"
- New - Methods for plugin 'init' , 'destroy' ,  'update'
- New - Option for debug mode -> debug: true.
- New - Get token for ajax request form cookie
- New - Attributes for textarea, supported atrributes are "rows", "cols", "maxlength", "wrap"
- New - Count for textarea
- Fix typo

v1.2.5 (2017/08/13)
-------------------
- Updated 'example.php' file
- Improved language localization
- Improved Ajax request to server with callback function
- Stop submit normaly form
- Fix typo

v1.2.4 (2017/08/12)
-------------------
- Added language localization
- Added option for send server method
- Added $.trim for value
- Updated 'example.php' file
- Fix typo

v1.2.3 (2015/04/20)
-------------------
- Added 'bower.json' to use this package manager
- Added 'tbody' in the selector during the construction of the structure, to avoid problems with the 'tfoot'
- Now when you tab in a row, the form is saved. Only if there is no save button

v1.2.2 (2015/04/02)
-------------------
- Updated 'example.php' file
- Updated project page with examples and documentation
- Now if 'onAjax()' hook returns false, does not send the ajax request
- Added 'rowIdentifier' option to change the name of attribute in td element for the row identifier
- Fixed bug that allows you to change to edit mode with mouse click when the line was deleted
- Quick fix for issue that sometimes could not remove the warning class on the edited rows

v1.2.1 (2015/03/10)
-------------------
- Improved the select element
- Does not add hidden save button if the 'editButton' option is false
- Does not add hidden restore button if the 'deleteButton' option is false
- Added a new option 'autoFocus' to enable or not the focus in the first input when click in edit button
- Added a new hook 'onAjax(action, serialize)' that runs before the ajax request

v1.2.0 (2015/03/07)
-------------------
- Added 'saveButton' and 'restoreButton' options
- Added 'toolbarClass' and 'groupClass' options
- Changed 'removeButton' option to 'deleteButton'
- Changed 'remove' action to 'delete'
- Removed 'textSelection' option, using CSS to prevent the text is selected with double click
- Removed 'confirmText' option, because a button was created to confirm the removal
- Removed form wrapped on table, because now it serialize inputs instead of the form
- In 'buttons' option now have a new child 'action' to change name of action input ('edit', 'delete' and 'restore')
- Redesign of toolbox and changed name to toolbar
- Minor code improvement
- Fixed some bugs

v1.1.1 (2015/03/05)
-------------------
- Fixed bug when creates the form wrapped on table

v1.1.0 (2015/02/08)
-------------------
- Added toolbox column with edit and remove buttons
- Added effect on table row when ajax request fails
- Added effect on table row when changes are saved with success
- Added 'onAlways()' hook, that is executed whenever there is an ajax request
- Change 'onComplete(response)' hook to 'onSuccess(data, textStatus, jqXHR)'
- Change 'onError()' hook to 'onFail(jqXHR, textStatus, errorThrown)'
- Fixed some minor bugs
- Minor code improvement

v1.0.0 (2015/01/30)
-------------------
- Initial release