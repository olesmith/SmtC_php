import re,os,sys,socket
from datetime import datetime

#from TikZ import *

##!
##! Generate 'flat' list and print.
##!

def Latex_Print(latex,level=-1,indent="   "):
    latex=Latex_Text(latex,level,indent)
    
    print(   "\n".join(latex)   )

    return latex
    
##!
##! Takes list of strings and sublists and generates text list.
##! Read to be joinded.
##!

def Latex_Text(latex,level=-1,indent="   "):
    if (isinstance(latex,str)):
        return [ latex ]
    
    text=[]
    for i in range(len(latex)):
        if (isinstance(latex[i],list)):
            text=text+Latex_Text(latex[i],level+1,indent)
        else:
            text=text+[
                (indent*level)+latex[i]#+"%%"+str(level)
            ]
            
    return text
        
##!
##!
##!

def Latex_Doc_CLass(docclass,options=""):
    return "\\documentclass{"+docclass+"}["+options+"]"

    
##!
##!
##!

def Latex_Amble_Pre(docclass,options,preamble=False):
    if (not preamble):
        preamble="PreAmble.tex"

    #Search for preamble in cwd and upwards
    cwd=os.getcwd()

    comps=cwd.split("/")
    
    cds=[]
    while (len(comps)>0):
        pre="/".join(comps)+"/"+preamble
        if (os.path.isfile(pre)):
            break

        comps.pop()
        cds.append("..")

    if (not os.path.isfile(preamble)):
        preamble="/".join(cds)+"/"+preamble
    now = datetime.now()
    return [
        Latex_Doc_CLass(docclass,options),
        "%%!Generated by "+" ".join(sys.argv)+ " at "+
        now.strftime("%d/%m/%Y %H:%M:%S"),
        "%%! Host: "+socket.gethostname(),
        "\\input{"+preamble+"}",
        "\\begin{document}",
    ]


##!
##!
##!

def Latex_Amble_Post():
    return [
        "\\end{document}",
    ]


##!
##! Includegraphics
##!

def Latex_Includegraphics(tikzname):        
    pdfname=re.sub('(\.tikz)?\.tex',".pdf",tikzname)
    if (not os.path.isfile(pdfname)): return []
    
    return Latex_Environment(
        "center",
        ["\\includegraphics{"+pdfname+"}",]
    )

##!
##!
##!

def Latex_Math(latex):
    return [
        "\\[",
        latex,
        "\\]"
    ]



##!
##!
##!

def Latex_Inline(latex):
    return ["$"]+latex+["$"]


##!
##!
##!

def Latex_Title(title,size="Large"):
    return [
        Latex_Environment(
            "center",[
                "\\textbf{\\"+size+"{"+title+"}}"
            ]
        )
    ]

##!
##!
##!

def Latex_Environment(env,latex,options=""):
    if (options!=""):
        options="["+options+"]"
        
    return [
        "\\begin{"+env+"}"+options,
    ]+latex+[
        "\\end{"+env+"}"
    ]

##!
##!
##!

def Latex_Itemize(items,options="",env="enumerate"):
    latex=[]
    for i in range(len(items)):
        latex.append("\\item")
        latex.append(items[i])
        
    return Latex_Environment(env,latex,options)

##!
##!
##!

def Latex_Table(table,options="",env="tabular"):
    hline="\\hline"
    latex=[hline]
    for row in table:
        cols=[]
        for col in row:
            if (isinstance(col,list)):
                col="\n".join(Latex_Text(col))
            else:
                col=str(col)
                
            cols.append(col)
        latex.append(   " & ".join(cols)+"\\\\"   )
        latex.append(hline)

    spec="c"
    specs=[]
    for col in table[0]:
        specs.append(spec)

    spec="|".join(specs)

    return [
        "\\begin{center}\\begin{tabular}{|"+spec+"|}",
        latex,
        "\\end{tabular}\\end{center}",
        "",
    ]

##!
##!
##!

def Latex_Matrix_Name(name,subscript=None,supscript=None):
    if (subscript!=None): subscript="_"+subscript
    else:                 subscript="~"
    
    if (not supscript): supscript=""
    
    return "\\underline{\\underline{"+name+"}}"+supscript+subscript

##!
##!
##!

def Latex_Save(texname,latex,docclass="report",options="10pts",preamble=False,tell=True):
    latex=Latex_Text(latex)
    
    latex=Latex_Amble_Pre(
        docclass,options,preamble
    )+latex+Latex_Amble_Post()

    f=open(texname,"w" )

    n_bytes=0
    for line in latex:
        f.write("%s\n" % line)
        n_bytes+=len(line)
        
    f.close()
    tell=True
    if (tell):
        print(n_bytes,"bytes written to:",texname)

    return latex
    
##!
##!
##!

def Latex_Run(texname,latex,docclass="report",options="10pts",preamble=False,clean=True):

    Latex_Save(texname,latex,docclass,options,preamble)
    
    commands=" ".join([
        "/usr/bin/pdflatex",
        texname,
        ">",
        texname+".log",
        "2>&1"
    ])

    res=os.system(commands)

    print(commands+":",res)

    if (clean):
        Latex_Clean(texname)
        
    return res

##!
##!
##!

def Latex_Clean(texname):
    for ext in ["aux"]:
        filename=re.sub('\.tex$',"."+ext,texname)
        if (os.path.isfile(filename)):
            print("exists")
            command=" ".join([
                "/bin/rm",
                filename
            ])
            
            res=os.system(command)
