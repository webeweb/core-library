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
 * Intitule3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitule3Trait {

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }
}
