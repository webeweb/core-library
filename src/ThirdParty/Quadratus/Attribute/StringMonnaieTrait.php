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
 * Monnaie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMonnaieTrait {

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }
}
