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

use DateTime;

/**
 * Facturation paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFacturationPaieTrait {

    /**
     * Facturation paie.
     *
     * @var DateTime|null
     */
    private $facturationPaie;

    /**
     * Get the facturation paie.
     *
     * @return DateTime|null Returns the facturation paie.
     */
    public function getFacturationPaie() {
        return $this->facturationPaie;
    }

    /**
     * Set the facturation paie.
     *
     * @param DateTime|null $facturationPaie The facturation paie.
     */
    public function setFacturationPaie(DateTime $facturationPaie = null) {
        $this->facturationPaie = $facturationPaie;
        return $this;
    }
}
