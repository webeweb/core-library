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
 * Qualifiant3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualifiant3Trait {

    /**
     * Qualifiant3.
     *
     * @var string
     */
    private $qualifiant3;

    /**
     * Get the qualifiant3.
     *
     * @return string Returns the qualifiant3.
     */
    public function getQualifiant3() {
        return $this->qualifiant3;
    }

    /**
     * Set the qualifiant3.
     *
     * @param string $qualifiant3 The qualifiant3.
     */
    public function setQualifiant3($qualifiant3) {
        $this->qualifiant3 = $qualifiant3;
        return $this;
    }
}
