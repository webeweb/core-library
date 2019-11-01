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
 * Intitule1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitule1Trait {

    /**
     * Intitule1.
     *
     * @var string
     */
    private $intitule1;

    /**
     * Get the intitule1.
     *
     * @return string Returns the intitule1.
     */
    public function getIntitule1() {
        return $this->intitule1;
    }

    /**
     * Set the intitule1.
     *
     * @param string $intitule1 The intitule1.
     */
    public function setIntitule1($intitule1) {
        $this->intitule1 = $intitule1;
        return $this;
    }
}
