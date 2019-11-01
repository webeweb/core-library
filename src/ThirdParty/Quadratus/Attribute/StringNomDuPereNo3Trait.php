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
 * Nom du pere no3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo3Trait {

    /**
     * Nom du pere no3.
     *
     * @var string
     */
    private $nomDuPereNo3;

    /**
     * Get the nom du pere no3.
     *
     * @return string Returns the nom du pere no3.
     */
    public function getNomDuPereNo3() {
        return $this->nomDuPereNo3;
    }

    /**
     * Set the nom du pere no3.
     *
     * @param string $nomDuPereNo3 The nom du pere no3.
     */
    public function setNomDuPereNo3($nomDuPereNo3) {
        $this->nomDuPereNo3 = $nomDuPereNo3;
        return $this;
    }
}
