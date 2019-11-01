<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Fct rapproch banq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctRapprochBanqTrait {

    /**
     * Fct rapproch banq.
     *
     * @var bool
     */
    private $fctRapprochBanq;

    /**
     * Get the fct rapproch banq.
     *
     * @return bool Returns the fct rapproch banq.
     */
    public function getFctRapprochBanq() {
        return $this->fctRapprochBanq;
    }

    /**
     * Set the fct rapproch banq.
     *
     * @param bool $fctRapprochBanq The fct rapproch banq.
     */
    public function setFctRapprochBanq($fctRapprochBanq) {
        $this->fctRapprochBanq = $fctRapprochBanq;
        return $this;
    }
}
