

function Load_Math22(id)
{
    MathJax = {
        tex: {
            tags: 'ams',
            inlineMath: [ ['$', '$'], ['[;',';]'], ['\\(', '\\)'] ]
          },
          svg: {
              fontCache: 'global'
          }
    };
    
    console.log("MathJax2");
    var script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js?config=TeX-AMS-MML_HTMLorMML';
    script.async = true;
    script.id = "MathJax-script";
    //script.text = 'MathJax.Hub.Queue(["Typeset",MathJax.Hub,id]);';
    //script.text = 'MathJax.Hub.Reprocess(id);';

    //id='"'+id+'"';
    //script.text ='MathJax.Hub.Queue(["Typeset",MathJax.Hub,id]);';
    //script.text =
    //    'MathJax.startup.document.state(0);'+
    //    'MathJax.texReset();'+
    //    'MathJax.typeset();'+
    //    //'MathJax.Hub.Queue(["Typeset",MathJax.Hub,id]);'+
        '';
    
    document.head.appendChild(script);
    //console.log(id);

}
//Load_Math(123);


