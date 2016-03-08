function iframe(){
    editor.document.designMode='on';    
}

// edit_property
    function bold(){
        editor.document.execCommand('bold', false, null)
    }

    function underline(){
        editor.document.execCommand('underline', false, null)
    }

    function italic(){
        editor.document.execCommand('italic', false, null)
    }

    function titre(){
        editor.document.execCommand('formatBlock', false, 'h2')
    }

    function s_title(){
        editor.document.execCommand('formatBlock', false, 'h3')
    }

    function p(){
        editor.document.execCommand('formatBlock', false, 'p')
    }

    function link(){
        var link = document.getElementById("recup_http").value;
        //var link = prompt("Enter a link", "http://");
        editor.document.execCommand('createlink', false, link);
    }
        

function formsubmit(){
    document.getElementById("textarea").value = window.frames['editor'].document.body.innerHTML;
	document.getElementById("rtf").submit();
}