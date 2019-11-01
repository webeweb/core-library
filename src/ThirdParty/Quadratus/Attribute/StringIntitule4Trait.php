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
 * Intitule4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitule4Trait {

    /**
     * Intitule4.
     *
     * @var string
     */
    private $intitule4;

    /**
     * Get the intitule4.
     *
     * @return string Returns the intitule4.
     */
    public function getIntitule4() {
        return $this->intitule4;
    }

    /**
     * Set the intitule4.
     *
     * @param string $intitule4 The intitule4.
     */
    public function setIntitule4($intitule4) {
        $this->intitule4 = $intitule4;
        return $this;
    }
}
