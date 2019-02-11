    function notnullresource()
    {
        var a=document.forms["resource"]["resource_id"].value;
        var b=document.forms["resource"]["resource_type"].value;
        var c=document.forms["resource"]["sub_type"].value;
        var d=document.forms["resource"]["capacity"].value;
        var e=document.forms["resource"]["ohp"].value;
        var f=document.forms["resource"]["sound_system"].value;
        var g=document.forms["resource"]["multimedia"].value;
        var h=document.forms["resource"]["wifi"].value;
        var i=document.forms["resource"]["status"].value;

        if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="",d==null || d=="",f==null || f=="",g==null || g=="",h==null || h=="",i==null || i=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
