<?php

/*
 * This file is part of the PhpStorm package.
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace Desarrolla2\FormBundle\Form\Transformer;

use Symfony\Component\Form\DataTransformerInterface;

class CardNumberTransformer implements DataTransformerInterface
{
    /**
     * @param string $number
     *
     * @return string
     */
    public function transform($number)
    {
        if (null === $number) {
            return '';
        }

        return $number;
    }

    /**
     * @param string $number
     *
     * @return string
     */
    public function reverseTransform($number)
    {
        return preg_replace("/[^\d]/", "", $number);
    }
}