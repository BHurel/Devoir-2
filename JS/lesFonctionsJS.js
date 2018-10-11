function AfficherCreation(idConference)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlConferences/AfficherCreation",
        data:"idConference="+idConference,
        success:function(data)
        {
            $('#divNumeroConference').empty();
            $('#divContenuConference').empty();
            $('#divFormations').append(data);
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
            $('#divAgents').empty();
            $('#divFormations').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function AfficherAgents(idFormation)
{
    numF = idFormation;
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherAgents",
        data:"idFormation="+idFormation,
        success:function(data)
        {
            $('#divAgents').empty();
            $('#divAgents').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
function ValiderPresence()
{
    
    var tabCode = Array();
    var tabPresence = Array();
    $("input[type=checkbox]").each(function(){
        tabCode.push($(this).val());
        tabPresence.push($(this).is(":checked"));
    });


    $.ajax(
        {
            type:"get",
            url:"index.php/CtrlActivites/ValiderPresence",
            data:"tab1="+tabCode+"&tab2="+tabPresence+"&numF="+numF,
            success:function(data)
            {
                alert("OK");
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}