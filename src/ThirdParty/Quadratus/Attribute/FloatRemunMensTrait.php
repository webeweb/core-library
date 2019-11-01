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
 * Remun mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemunMensTrait {

    /**
     * Remun mens.
     *
     * @var float
     */
    private $remunMens;

    /**
     * Get the remun mens.
     *
     * @return float Returns the remun mens.
     */
    public function getRemunMens() {
        return $this->remunMens;
    }

    /**
     * Set the remun mens.
     *
     * @param float $remunMens The remun mens.
     */
    public function setRemunMens($remunMens) {
        $this->remunMens = $remunMens;
        return $this;
    }
}
