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
 * Nom du pere no4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo4Trait {

    /**
     * Nom du pere no4.
     *
     * @var string
     */
    private $nomDuPereNo4;

    /**
     * Get the nom du pere no4.
     *
     * @return string Returns the nom du pere no4.
     */
    public function getNomDuPereNo4() {
        return $this->nomDuPereNo4;
    }

    /**
     * Set the nom du pere no4.
     *
     * @param string $nomDuPereNo4 The nom du pere no4.
     */
    public function setNomDuPereNo4($nomDuPereNo4) {
        $this->nomDuPereNo4 = $nomDuPereNo4;
        return $this;
    }
}
