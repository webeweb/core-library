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
 * Compte charge4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge4Trait {

    /**
     * Compte charge4.
     *
     * @var string
     */
    private $compteCharge4;

    /**
     * Get the compte charge4.
     *
     * @return string Returns the compte charge4.
     */
    public function getCompteCharge4() {
        return $this->compteCharge4;
    }

    /**
     * Set the compte charge4.
     *
     * @param string $compteCharge4 The compte charge4.
     */
    public function setCompteCharge4($compteCharge4) {
        $this->compteCharge4 = $compteCharge4;
        return $this;
    }
}
