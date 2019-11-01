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
 * Nom du pere no1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo1Trait {

    /**
     * Nom du pere no1.
     *
     * @var string
     */
    private $nomDuPereNo1;

    /**
     * Get the nom du pere no1.
     *
     * @return string Returns the nom du pere no1.
     */
    public function getNomDuPereNo1() {
        return $this->nomDuPereNo1;
    }

    /**
     * Set the nom du pere no1.
     *
     * @param string $nomDuPereNo1 The nom du pere no1.
     */
    public function setNomDuPereNo1($nomDuPereNo1) {
        $this->nomDuPereNo1 = $nomDuPereNo1;
        return $this;
    }
}
