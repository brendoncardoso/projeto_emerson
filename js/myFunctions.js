$(document).ready(function(){
    var tela = $(window).height();
    var conteudo = $('.navbar').height() + $('html').height();
    var conteudo2 = 700;

    /*if (conteudo < tela || conteudo < conteudo2) {
        $('.footer').css({'position':'relative','bottom':'auto'});
        
    }else{
        $('.footer').css({'position':'relative','bottom':'auto'});
    }*/
   
    var id = $('#view').attr('data-id');

    $('#search').click(function(e){
        
        e.preventDefault();

        var dia1 = $('#dia1').val();
        var dia2 = $('#dia2').val();
        var filtrar = $('#filtrar').val();

        $.ajax({
            url: 'recebeDados.php',
            type: 'POST',
            dataType: 'html',
            data:{dia1:dia1, dia2:dia2, filtrar:filtrar},
            beforeSend: function(){
                $('#resposta').html("<img src='img/spinner.gif' height=50 style='margin-bottom: 10px; margin-left: 45%;'>");
            },
            success: function(msg){
                $('#resposta').html(msg);
                $('.viewButton').click(function(){
                    var view_id = $(this).attr('id');
                    $.ajax({
                        url: 'modalViewAudiencia.php',
                        method: 'POST',
                        dataType: 'html',
                        data:{view_id: view_id},
                        success: function(data){
                            $('#view').html(data);
                            $('#viewAudiencia').modal("show");
                        }
                    });

                });

                $('.editButton').click(function(){
                    var view_id = $(this).attr('id');
                    
                    $.ajax({
                        url: 'modalEditAudiencia.php',
                        method: 'POST',
                        dataType: 'html',
                        data:{view_id: view_id},
                        success: function(data){
                            $('#edit').html(data);
                            $('#editAudiencia').modal("show");
                            
                            $('.saveThis').click(function(){
                            var data_audiencia = $("input[name=data_audiencia]").val();
                            var processo_administrativo = $("input[name=processo_administrativo]").val();
                            var processo_eletronico = $("input[name=processo_eletronico]").val();
                            var procurador = $("input[name=procurador]").val();
                            var status_audiencia = $("input[name=status_audiencia]").val();
                            var vt = $("input[name=vt]").val();
                            var vc = $("input[name=vc]").val();
                            var processo_civil = $("input[name=processo_civil]").val();
                            var comarca = $("input[name=comarca]").val();
                            var reclamante = $("input[name=reclamante]").val();
                            var reclamada = $("input[name=reclamada]").val();
                            var procurador = $("input[name=procurador]").val();
                            var obs_audiencia = $("input[name=obs_audiencia]").val();
                            $('tbody').load();

                                $.ajax({
                                    url: 'editAudiencia.php',
                                    method: 'POST',
                                    dataType: 'html',
                                    data:{view_id:view_id,
                                        data_audiencia: data_audiencia, 
                                        processo_administrativo:processo_administrativo, 
                                        processo_eletronico:processo_eletronico,
                                        procurador:procurador,
                                        status_audiencia:status_audiencia,
                                        vt:vt, 
                                        vc:vc,
                                        processo_civil:processo_civil,
                                        comarca:comarca,
                                        reclamante:reclamante,
                                        reclamada:reclamada,
                                        procurador:procurador,
                                        obs_audiencia:obs_audiencia
                                    },
                                    success: function(data){
                                        $('#saved').html(data);
                                    }
                                });
                            });
                        }
                    });
                });
                $('.deleteButton').click(function(){
                    var delete_id = $(this).attr('id');
                    $.ajax({
                        url: 'modalDeleteAudiencia.php',
                        method: 'POST',
                        dataType: 'html',
                        data:{delete_id: delete_id},
                        success: function(data){
                            $('#delete').html(data);
                            $('#deleteAudiencia').modal("show");
                            var oi = document.querySelectorAll("table tr");
                            $('.deleteThis').click(function(e){
                                e.preventDefault();
                                var el = this;
                                var delete_tr_class = this.id;
                                var delete_tr = $('tbody').children('tr.'+delete_tr_class)[0];

                                $.ajax({
                                    url: 'deleteAudiencia.php',
                                    type: 'POST',
                                    data: {id:delete_tr_class},
                                    success: function(response){
                                        $(delete_tr).remove();
                                        $('#deleteAudiencia').modal("hide");
                                    } 
                                });
                            });
                        }
                    });
                });
            }
        });
    }); 
    
    var getActiveRel = $('.btn-cadastrar').attr('class');
    if(getActiveRel = 'active'){
        $('.cadastrar').show();
        $('.relatorios').hide();
    }

    $('.btn-relatorio').click(function(){
        $(this).addClass('active');
        $('.btn-cadastrar').removeClass('active');
        $('.cadastrar').hide();
        $('.relatorios').show();
    });

    $('.btn-cadastrar').click(function(){
        $(this).addClass('active');
        $('.btn-relatorio').removeClass('active');
        $('.cadastrar').show();
        $('.relatorios').hide();
    });

    
    

    
});

