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
 * Type reseau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeReseauTrait {

    /**
     * Type reseau.
     *
     * @var string
     */
    private $typeReseau;

    /**
     * Get the type reseau.
     *
     * @return string Returns the type reseau.
     */
    public function getTypeReseau() {
        return $this->typeReseau;
    }

    /**
     * Set the type reseau.
     *
     * @param string $typeReseau The type reseau.
     */
    public function setTypeReseau($typeReseau) {
        $this->typeReseau = $typeReseau;
        return $this;
    }
}
