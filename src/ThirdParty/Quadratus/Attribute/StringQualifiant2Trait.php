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
 * Qualifiant2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualifiant2Trait {

    /**
     * Qualifiant2.
     *
     * @var string
     */
    private $qualifiant2;

    /**
     * Get the qualifiant2.
     *
     * @return string Returns the qualifiant2.
     */
    public function getQualifiant2() {
        return $this->qualifiant2;
    }

    /**
     * Set the qualifiant2.
     *
     * @param string $qualifiant2 The qualifiant2.
     */
    public function setQualifiant2($qualifiant2) {
        $this->qualifiant2 = $qualifiant2;
        return $this;
    }
}
