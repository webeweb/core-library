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
 * Capital monnaie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCapitalMonnaieTrait {

    /**
     * Capital monnaie.
     *
     * @var string
     */
    private $capitalMonnaie;

    /**
     * Get the capital monnaie.
     *
     * @return string Returns the capital monnaie.
     */
    public function getCapitalMonnaie() {
        return $this->capitalMonnaie;
    }

    /**
     * Set the capital monnaie.
     *
     * @param string $capitalMonnaie The capital monnaie.
     */
    public function setCapitalMonnaie($capitalMonnaie) {
        $this->capitalMonnaie = $capitalMonnaie;
        return $this;
    }
}
