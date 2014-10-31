<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @var array $config Global blog configuration
 * @var Model_User $user Global Kohana user object
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 */
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand active" style="color: #fff" href="javascript:void(0)">Админка DDelivery Insales</a>
        </div>

        <div style="margin-top: 5px;">
            <?php
            /*
            <a  class="btn btn-warning"  href="#>">Вернуться в кабинет</a>
            <a class="btn btn-success" href="#">Добавить способ доставки в Insales</a>
            <?php */
            ?>
            <div style="text-align: right">
                <a  class="btn btn-warning"  href="/admin/">Вернуться назад</a>
                <a class="btn btn-success" onclick="" href="/admin/auth/logout/">Выход</a>
            </div>
        </div>
    </div>
</div>






<div class="container theme-showcase" style="margin-top: 50px;">
    <?php
    if( !empty($message['success'])){
        ?>
        <p class="bg-success" style="text-align: center" >
            <?php echo  $message['success']; ?>
        </p>
    <?php
    }
    ?>

    <div class="page-header">
        <h3><?=($user->add_url . ', ' . $user->shop)?></h3>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var user_id = <?=$user->id?>;
            $('.server_info').on('click', function () {
                var id = parseInt( $(this).attr('data') );
                var el = $(this);
                if(id){
                    $.ajax({
                        url: "/admin/main/orderremote/",
                        type: "POST",
                        data: {
                            order_id: id,
                            id:user_id
                        },
                        dataType: "html",
                        success: function(data){
                            el.parent().parent().find('.server_order_content').html(data);
                        }
                    });
                }

            });
            $('#accordion').on('show.bs.collapse', function (el) {

                var id = $( el.target ).first().attr('data');
                $.ajax({
                    url: "/admin/main/orderbyid/",
                    type: "POST",
                    data: {
                            order_id: id,
                            id:user_id
                    },
                    dataType: "html",
                    success: function(data){
                        $( el.target).find('.order_body').html(data);
                    }
                });
            })

        });

    </script>
    <div class="row marketing">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
                if( count($orders) > 0 ){
                    foreach( $orders as $item ){
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab"  id="headingOne-<?=$item->id?>">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$item->id?>" aria-expanded="true" aria-controls="collapse-<?=$item->id?>">
                                        <?php
                                            echo 'localId - ' . $item->id . ', ' .
                                                 'shop_refnum - ' . $item->shop_refnum . ', ' .
                                                 'ddeliveryorder_id - ' . $item->ddeliveryorder_id . ', ' .
                                                 'add_field2 - ' . $item->add_field2;
                                        ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-<?=$item->id?>" data="<?=$item->id?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne-<?=$item->id?>">
                                <div class="panel-body">
                                    <div class="server_order">
                                        <div><a class="server_info" href="javascript:void(0)" data="<?=(int)$item->add_field2?>">Получить из сервера</a> </div>
                                        <div class="server_order_content"></div>
                                    </div>
                                    <div class="order_body">
                                    <?php
                                        echo '<pre>';
                                        print_r($item);
                                        echo '</pre>';
                                        //Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    ?>
                                    </div>
                                    </div>
                            </div>
                        </div>

            <?php
                }
                }
            ?>
        </div>
    </div>
</div>