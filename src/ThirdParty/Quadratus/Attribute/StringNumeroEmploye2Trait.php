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
 * Numero employe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroEmploye2Trait {

    /**
     * Numero employe2.
     *
     * @var string
     */
    private $numeroEmploye2;

    /**
     * Get the numero employe2.
     *
     * @return string Returns the numero employe2.
     */
    public function getNumeroEmploye2() {
        return $this->numeroEmploye2;
    }

    /**
     * Set the numero employe2.
     *
     * @param string $numeroEmploye2 The numero employe2.
     */
    public function setNumeroEmploye2($numeroEmploye2) {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }
}
