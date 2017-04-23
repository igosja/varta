<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link(
                    'Назад',
                    array('index'),
                    array('class' => 'btn btn-default')
                ); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h2_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h2_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h2_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h3_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h3_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h3_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_1_ua'); ?></td>
                        <td>
                            <?= $form->textarea($model, 'text_1_ua', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_1_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_2_ua'); ?></td>
                        <td>
                            <?= $form->textarea($model, 'text_2_ua', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_2_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h2_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h2_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h3_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h3_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h3_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_1_ru'); ?></td>
                        <td>
                            <?= $form->textarea($model, 'text_1_ru', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_2_ru'); ?></td>
                        <td>
                            <?= $form->textarea($model, 'text_2_ru', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'image_id'); ?></td>
                        <td>
                            <input type="file" name="image" class="form-control"/>
                        </td>
                    </tr>
                </table>
            </div>
            <?= $this->renderPartial('/include/seo-form', array('model' => $model, 'form' => $form)) ?>
        </div>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>