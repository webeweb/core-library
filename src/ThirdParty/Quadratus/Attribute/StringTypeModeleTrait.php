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
 * Type modele trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeModeleTrait {

    /**
     * Type modele.
     *
     * @var string
     */
    private $typeModele;

    /**
     * Get the type modele.
     *
     * @return string Returns the type modele.
     */
    public function getTypeModele() {
        return $this->typeModele;
    }

    /**
     * Set the type modele.
     *
     * @param string $typeModele The type modele.
     */
    public function setTypeModele($typeModele) {
        $this->typeModele = $typeModele;
        return $this;
    }
}
