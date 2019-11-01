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
 * Type paiment modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypePaimentModifieTrait {

    /**
     * Type paiment modifie.
     *
     * @var bool
     */
    private $typePaimentModifie;

    /**
     * Get the type paiment modifie.
     *
     * @return bool Returns the type paiment modifie.
     */
    public function getTypePaimentModifie() {
        return $this->typePaimentModifie;
    }

    /**
     * Set the type paiment modifie.
     *
     * @param bool $typePaimentModifie The type paiment modifie.
     */
    public function setTypePaimentModifie($typePaimentModifie) {
        $this->typePaimentModifie = $typePaimentModifie;
        return $this;
    }
}
