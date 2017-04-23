<?php

class Order extends CFormModel
{
    public $email;
    public $name;
    public $service;
    public $telephone;
    public $text;

    public function rules()
    {
        return array(
            array('name, service, telephone', 'required'),
            array('name', 'length', 'max' => 255),
            array('email', 'email'),
            array('text', 'safe'),
        );
    }

    public function send()
    {
        $text = 'Имя - ' . $this->name;
        if ($this->telephone) {
            $text .= 'Телефон - ' . $this->telephone;
        }
        if ($this->email) {
            $text .= 'Email - ' . $this->email;
        }
        if ($this->service) {
            $text .= 'Услуга - ' . $this->service;
        }
        if ($this->text) {
            $text .= 'Комментарий - ' . $this->text;
        }
        $contact = PageContact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact->email);
        $mail->setSubject('Клиент заказал услугу на сайте');
        $mail->setHtml($text);
        $mail->send();
    }
}