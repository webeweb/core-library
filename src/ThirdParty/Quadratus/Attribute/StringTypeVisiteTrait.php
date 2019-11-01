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
 * Type visite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVisiteTrait {

    /**
     * Type visite.
     *
     * @var string
     */
    private $typeVisite;

    /**
     * Get the type visite.
     *
     * @return string Returns the type visite.
     */
    public function getTypeVisite() {
        return $this->typeVisite;
    }

    /**
     * Set the type visite.
     *
     * @param string $typeVisite The type visite.
     */
    public function setTypeVisite($typeVisite) {
        $this->typeVisite = $typeVisite;
        return $this;
    }
}
