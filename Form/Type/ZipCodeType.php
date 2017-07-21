<?php

/*
 * This file is part of the Jotelulu package
 *
 * Copyright (c) 2017 Adder Global && Devtia
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Desarrolla2\FormBundle\Form\Type;

use Desarrolla2\FormBundle\Form\Validator\ZipCode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZipCodeType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'label' => 'Zip Code',
                'constraints' => [
                    new ZipCode(),
                ],
            ]
        );
    }

    public function getParent()
    {
        return TextType::class;
    }
}
