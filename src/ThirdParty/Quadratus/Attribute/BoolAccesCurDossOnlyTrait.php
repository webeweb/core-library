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
 * Acces cur doss only trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesCurDossOnlyTrait {

    /**
     * Acces cur doss only.
     *
     * @var bool
     */
    private $accesCurDossOnly;

    /**
     * Get the acces cur doss only.
     *
     * @return bool Returns the acces cur doss only.
     */
    public function getAccesCurDossOnly() {
        return $this->accesCurDossOnly;
    }

    /**
     * Set the acces cur doss only.
     *
     * @param bool $accesCurDossOnly The acces cur doss only.
     */
    public function setAccesCurDossOnly($accesCurDossOnly) {
        $this->accesCurDossOnly = $accesCurDossOnly;
        return $this;
    }
}
