<?php

/**
 * This file is part of the Transactional package
 *
 * (c) InnovationGroup
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace FivePercent\Component\Transactional\Proxy;

use FivePercent\Component\Transactional\TransactionalInterface;

/**
 * Indicate proxy classes
 *
 * @author Vitaliy ZHuk <zhuk2205@gmail.com>
 */
interface ProxyInterface
{
    /**
     * Set transactional instance
     *
     * @param TransactionalInterface $transactional
     */
    public function ___setTransactional(TransactionalInterface $transactional);

    /**
     * Get real class name
     *
     * @return string
     */
    public function ___getRealClassName();
}
