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
 * Qualifiant1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualifiant1Trait {

    /**
     * Qualifiant1.
     *
     * @var string
     */
    private $qualifiant1;

    /**
     * Get the qualifiant1.
     *
     * @return string Returns the qualifiant1.
     */
    public function getQualifiant1() {
        return $this->qualifiant1;
    }

    /**
     * Set the qualifiant1.
     *
     * @param string $qualifiant1 The qualifiant1.
     */
    public function setQualifiant1($qualifiant1) {
        $this->qualifiant1 = $qualifiant1;
        return $this;
    }
}
