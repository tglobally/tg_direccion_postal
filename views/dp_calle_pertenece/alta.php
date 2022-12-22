<?php /** @var \tglobally\tg_direccion_postal\controllers\controlador_dp_calle_pertenece $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_alta_bd;?>" class="form-additional">

                <?php echo $controlador->inputs->dp_pais_id; ?>
                <?php echo $controlador->inputs->dp_estado_id; ?>
                <?php echo $controlador->inputs->dp_municipio_id; ?>
                <?php echo $controlador->inputs->dp_cp_id; ?>
                <?php echo $controlador->inputs->dp_colonia_postal_id; ?>
                <?php echo $controlador->inputs->dp_calle_id; ?>
                <?php echo $controlador->inputs->codigo; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
