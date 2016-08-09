$(document).ready(function(){

    var code = $(".codemirror-textarea")[0];



    var editor = CodeMirror.fromTextArea(code,{
        mode: "javascript",
        theme: "night",
        tabSize: 20,
        lineNumbers: true,
        firstLineNumber:1,
        extraKeys:{"Ctrl": "autocomplete"}
    });

    $("#preview-form").submit(function(e){
        var value = editor.getValue();
        if(value.length== 0){
            alert("missing comment!");
        }
    });
});
