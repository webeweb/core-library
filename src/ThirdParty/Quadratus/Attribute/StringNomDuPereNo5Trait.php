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
 * Nom du pere no5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo5Trait {

    /**
     * Nom du pere no5.
     *
     * @var string
     */
    private $nomDuPereNo5;

    /**
     * Get the nom du pere no5.
     *
     * @return string Returns the nom du pere no5.
     */
    public function getNomDuPereNo5() {
        return $this->nomDuPereNo5;
    }

    /**
     * Set the nom du pere no5.
     *
     * @param string $nomDuPereNo5 The nom du pere no5.
     */
    public function setNomDuPereNo5($nomDuPereNo5) {
        $this->nomDuPereNo5 = $nomDuPereNo5;
        return $this;
    }
}
