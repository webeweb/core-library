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
 * Nom du pere no2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo2Trait {

    /**
     * Nom du pere no2.
     *
     * @var string
     */
    private $nomDuPereNo2;

    /**
     * Get the nom du pere no2.
     *
     * @return string Returns the nom du pere no2.
     */
    public function getNomDuPereNo2() {
        return $this->nomDuPereNo2;
    }

    /**
     * Set the nom du pere no2.
     *
     * @param string $nomDuPereNo2 The nom du pere no2.
     */
    public function setNomDuPereNo2($nomDuPereNo2) {
        $this->nomDuPereNo2 = $nomDuPereNo2;
        return $this;
    }
}
