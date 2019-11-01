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
 * Compte charge7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge7Trait {

    /**
     * Compte charge7.
     *
     * @var string
     */
    private $compteCharge7;

    /**
     * Get the compte charge7.
     *
     * @return string Returns the compte charge7.
     */
    public function getCompteCharge7() {
        return $this->compteCharge7;
    }

    /**
     * Set the compte charge7.
     *
     * @param string $compteCharge7 The compte charge7.
     */
    public function setCompteCharge7($compteCharge7) {
        $this->compteCharge7 = $compteCharge7;
        return $this;
    }
}
