<?php

/**
 * This file is part of the Transactional package
 *
 * (c) InnovationGroup
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace FivePercent\Component\Transactional\Annotation;

/**
 * Indicate for run method in transaction layer
 *
 * @Annotation
 * @Target({"METHOD"})
 *
 * @author Vitaliy Zhuk <zhuk2205@gmail.com>
 */
class Transactional
{
    /** @var string */
    public $key;
}
