function AfficherCreation()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlConferences/AfficherCreation",
        success:function(data)
        {
            $('#divNumeroConference').append(data);
            $('#divTitreConference').empty();
            $('#divContenuConference').empty();
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
function AfficherConferences(idConference)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlConferences/AfficherConferences",
        data:"idConference="+idConference,
        success:function(data)
        {
            $('#divNumeroConference').empty();
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
function AfficherTechnologies(idtechno)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlConferences/AfficherTechnologies",
        data:"idtechno="+idtechno,
        success:function(data)
        {
            $('#divTechnologies').empty();
        },
        error:function()
        {
            alert('Erreur selection');
        }
    }
    );
}
function ValiderChoixConf()
{
    var tabChoixConf = Array();
    $("input[type=checkbox]").each(function(){
        tabChoixConf.push($(this).is(":checked"));
    });


    $.ajax(
        {
            type:"get",
            url:"index.php/CtrlActivites/ChoixConf",
            data:"tab1="+tabChoixConf,
            success:function(data)
            {
                alert("OK");
            },
            error:function()
            {
                alert('Erreur choix');
            }
        }
        );
}