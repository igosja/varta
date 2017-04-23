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
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'telephone_1'); ?></td>
                        <td>
                            <?= $form->textField($model, 'telephone_1', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'telephone_1'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'telephone_2'); ?></td>
                        <td>
                            <?= $form->textField($model, 'telephone_2', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'telephone_2'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'email'); ?></td>
                        <td>
                            <?= $form->textField($model, 'email', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'email'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'facebook'); ?></td>
                        <td>
                            <?= $form->textField($model, 'facebook', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'facebook'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'instagram'); ?></td>
                        <td>
                            <?= $form->textField($model, 'instagram', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'instagram'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'pinterest'); ?></td>
                        <td>
                            <?= $form->textField($model, 'pinterest', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'pinterest'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'vk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'vk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'vk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'lat'); ?></td>
                        <td>
                            <?= $form->textField($model, 'lat', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'lat'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'lng'); ?></td>
                        <td>
                            <?= $form->textField($model, 'lng', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'lng'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_1_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_1_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_1_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_2_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_2_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_2_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_3_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_3_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_3_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_1_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_1_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_1_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_2_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_2_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_2_ua'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_3_ua'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_3_ua', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_3_ua'); ?>
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
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_2_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_2_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_3_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_3_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_3_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_2_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_2_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'shedule_3_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'shedule_3_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'shedule_3_ru'); ?>
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