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
 * Nom du pere no6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo6Trait {

    /**
     * Nom du pere no6.
     *
     * @var string
     */
    private $nomDuPereNo6;

    /**
     * Get the nom du pere no6.
     *
     * @return string Returns the nom du pere no6.
     */
    public function getNomDuPereNo6() {
        return $this->nomDuPereNo6;
    }

    /**
     * Set the nom du pere no6.
     *
     * @param string $nomDuPereNo6 The nom du pere no6.
     */
    public function setNomDuPereNo6($nomDuPereNo6) {
        $this->nomDuPereNo6 = $nomDuPereNo6;
        return $this;
    }
}
