$(document).ready(function(){

    
    $("p.code").each(function(index,element){
       var codigo = $(element).html();
       var pre = '<script type="syntaxhighlighter" class="brush: php;toolbar: false"><![CDATA[';
       var fin = ']]></script>';
       ///console.log(pre+codigo+fin);
       $(element).after(pre+codigo+fin);
    });
    
     SyntaxHighlighter.all()
    
    
    
    
   
    
});
