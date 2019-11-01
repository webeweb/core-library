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
 * Compte tva taxe deee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvaTaxeDeeeTrait {

    /**
     * Compte tva taxe deee.
     *
     * @var string
     */
    private $compteTvaTaxeDeee;

    /**
     * Get the compte tva taxe deee.
     *
     * @return string Returns the compte tva taxe deee.
     */
    public function getCompteTvaTaxeDeee() {
        return $this->compteTvaTaxeDeee;
    }

    /**
     * Set the compte tva taxe deee.
     *
     * @param string $compteTvaTaxeDeee The compte tva taxe deee.
     */
    public function setCompteTvaTaxeDeee($compteTvaTaxeDeee) {
        $this->compteTvaTaxeDeee = $compteTvaTaxeDeee;
        return $this;
    }
}
