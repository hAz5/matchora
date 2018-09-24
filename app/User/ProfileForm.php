<?php

namespace App\User;

use Kris\LaravelFormBuilder\Form;

class ProfileForm extends Form
{
    const NAME = 'name';
    const EMAIL = 'email';
    public function buildForm()
    {
        $this->add(
            self::NAME,
            self::FIELD_TEXT,
            [
                'value' => $this->getData('name')
            ]
        )
            ->add(
                self::EMAIL, self::FIELD_EMAIL,
                [
                'value'=> $this->getData('email')
                ]
            )
            ->add(
                'submit',
                self::BUTTON_SUBMIT,
                [
                    'class' => 'btn btn-lg btn-success',
                    'label'=> 'label'
                ]
            );
    }
}
