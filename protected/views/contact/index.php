<section class="content">
    <div class="wrap usluga">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="contacts-b clearfix">
            <div class="contacts-b__item">
                <h3 class="contacts-b__item__title">
                    <?= Yii::t('views.contact.index', 'address'); ?>
                </h3>
                <div class="contacts-b__item__text">
                    <?= $o_page['address_1_' . Yii::app()->language]; ?><br/>
                    <?= $o_page['address_2_' . Yii::app()->language]; ?><br/>
                    <?= $o_page['address_3_' . Yii::app()->language]; ?>
                </div>
            </div>
            <div class="contacts-b__item">
                <h3 class="contacts-b__item__title">
                    <?= Yii::t('views.contact.index', 'telephone'); ?>
                </h3>
                <div class="contacts-b__item__text">
                    <?= $o_page['telephone_1']; ?><br/>
                    <?= $o_page['telephone_2']; ?>
                </div>
            </div>
            <div class="contacts-b__item">
                <h3 class="contacts-b__item__title">
                    E-mail:
                </h3>
                <div class="contacts-b__item__text">
                    <a href="mailto:<?= $o_page['email']; ?>"><?= $o_page['email']; ?></a>
                </div>
            </div>
            <div class="contacts-b__item">
                <h3 class="contacts-b__item__title">
                    <?= Yii::t('views.contact.index', 'shedule'); ?>
                </h3>
                <div class="contacts-b__item__text">
                    <span><?= Yii::t('views.contact.index', 'mon-fri'); ?></span>
                    <?= $o_page['shedule_1_' . Yii::app()->language]; ?><br/>
                    <span><?= Yii::t('views.contact.index', 'sat'); ?></span>
                    <?= $o_page['shedule_2_' . Yii::app()->language]; ?><br/>
                    <span><?= Yii::t('views.contact.index', 'sun'); ?></span>
                    <?= $o_page['shedule_3_' . Yii::app()->language]; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mab-b">
        <div id="map" data-lat="<?= $o_page['lat']; ?>" data-lng="<?= $o_page['lng']; ?>"></div>
        <div class="mab-b__wrap">
            <div class="mab-b__form">
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => true,
                )); ?>
                <div class="of-form__title"><?= Yii::t('views.contact.index', 'form-title'); ?></div>
                <div class="of-wrap clearfix">
                    <div class="need">
                        <?= $form->textField($model, 'name', array(
                            'class' => 'of-input of-input_name',
                            'placeholder' => Yii::t('form.feedback', 'name')
                        )); ?>
                        <?= $form->error($model, 'name'); ?>
                    </div>
                    <div class="need">
                        <?= $form->textField($model, 'telephone', array(
                            'class' => 'of-input of-input_phone phone_mask',
                            'placeholder' => Yii::t('form.feedback', 'telephone')
                        )); ?>
                        <?= $form->error($model, 'telephone'); ?>
                    </div>
                    <div>
                        <?= $form->textField($model, 'email', array(
                            'class' => 'of-input of-input_email',
                            'placeholder' => Yii::t('form.feedback', 'email')
                        )); ?>
                        <?= $form->error($model, 'email'); ?>
                    </div>
                    <div class="need">
                        <?= $form->textarea($model, 'text', array(
                            'class' => 'of-form__textarea',
                            'placeholder' => Yii::t('form.feedback', 'text')
                        )); ?>
                        <?= $form->error($model, 'text'); ?>
                    </div>
                    <div class="of-form__text">
                        <span></span><?= Yii::t('form', 'form-required'); ?>
                    </div>
                    <a href="javascript:;" class="of-submit of-submit__contacts">
                        <?= Yii::t('views.contact.index', 'form-send'); ?>
                    </a>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</section>