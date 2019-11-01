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
 * Monnaie loyer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMonnaieLoyerTrait {

    /**
     * Monnaie loyer.
     *
     * @var string
     */
    private $monnaieLoyer;

    /**
     * Get the monnaie loyer.
     *
     * @return string Returns the monnaie loyer.
     */
    public function getMonnaieLoyer() {
        return $this->monnaieLoyer;
    }

    /**
     * Set the monnaie loyer.
     *
     * @param string $monnaieLoyer The monnaie loyer.
     */
    public function setMonnaieLoyer($monnaieLoyer) {
        $this->monnaieLoyer = $monnaieLoyer;
        return $this;
    }
}
