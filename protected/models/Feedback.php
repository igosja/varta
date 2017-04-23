<?php

class Feedback extends CFormModel
{
    public $email;
    public $name;
    public $telephone;
    public $text;

    public function rules()
    {
        return array(
            array('name, telephone, text', 'required'),
            array('name', 'length', 'max' => 255),
            array('email', 'email'),
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
        if ($this->text) {
            $text .= 'Комментарий - ' . $this->text;
        }
        $contact = PageContact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact->email);
        $mail->setSubject('Клиент написал через обратную связь на сайте');
        $mail->setHtml($text);
        $mail->send();
    }
}