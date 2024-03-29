"use strict";

function Toggle_Elements_By_ID(elementids,display)
{
    for (let n=0;n<elementids.length;n++)
    {
        Toggle_Element_By_ID(elementids[n],display);
    }
}

function Toggle_Element_By_ID(elementid,display)
{
    let element = Get_Element_By_ID(elementid);
    if (element)
    {
        Toggle_Element(element,display);
    }
}


function Toggle_Elements_By_Class(clss,display='initial',tagname="")
{
    let elements = document.getElementsByClassName(clss);    
    for (let n=0;n<elements.length;n++)
    {
        if (tagname && elements[n].tagName!=tagname)
        {
            continue;
        }
        Toggle_Element(elements[n],display);
    }
}

function Toggle_Element(element,display)
{
    if (element.style.display=="none")
    {
        Show_Element(element,display);
    }
    else
    {
        Hide_Element(element);
    }
}


function Toggle_Colors(element,color1,color2)
{
    if (element.style.color==color2)
    {
        Color_Element(element,color1);
    }
    else
    {
        Color_Element(element,color2);
    }
}

function Toggle_Opacity(element,opacity)
{
    if (element.style.opacity==1)
    {
        element.style.opacity=opacity;
    }
    else
    {
        element.style.opacity=1;
    }
}


