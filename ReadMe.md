To start the test install the plugin in /custom/plugins/TestAutoCompleteBaseStoreIssue and then:
 
1- open the config form try to write anything in the select element and you will get the error.

note: This error can be solve be adding the 'setAlias' function in the Model files.

2- after fix the first error try to write something in the select element and you will see that it will clear everything you added.

Note: this because in remote mode it will search for the exact match for what you write. 