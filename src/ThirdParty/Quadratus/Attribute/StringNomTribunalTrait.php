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
 * Nom tribunal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomTribunalTrait {

    /**
     * Nom tribunal.
     *
     * @var string
     */
    private $nomTribunal;

    /**
     * Get the nom tribunal.
     *
     * @return string Returns the nom tribunal.
     */
    public function getNomTribunal() {
        return $this->nomTribunal;
    }

    /**
     * Set the nom tribunal.
     *
     * @param string $nomTribunal The nom tribunal.
     */
    public function setNomTribunal($nomTribunal) {
        $this->nomTribunal = $nomTribunal;
        return $this;
    }
}
