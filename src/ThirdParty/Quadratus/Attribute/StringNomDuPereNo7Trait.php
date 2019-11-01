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
 * Nom du pere no7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomDuPereNo7Trait {

    /**
     * Nom du pere no7.
     *
     * @var string
     */
    private $nomDuPereNo7;

    /**
     * Get the nom du pere no7.
     *
     * @return string Returns the nom du pere no7.
     */
    public function getNomDuPereNo7() {
        return $this->nomDuPereNo7;
    }

    /**
     * Set the nom du pere no7.
     *
     * @param string $nomDuPereNo7 The nom du pere no7.
     */
    public function setNomDuPereNo7($nomDuPereNo7) {
        $this->nomDuPereNo7 = $nomDuPereNo7;
        return $this;
    }
}
