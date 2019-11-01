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
 * Type filtre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFiltreTrait {

    /**
     * Type filtre.
     *
     * @var string
     */
    private $typeFiltre;

    /**
     * Get the type filtre.
     *
     * @return string Returns the type filtre.
     */
    public function getTypeFiltre() {
        return $this->typeFiltre;
    }

    /**
     * Set the type filtre.
     *
     * @param string $typeFiltre The type filtre.
     */
    public function setTypeFiltre($typeFiltre) {
        $this->typeFiltre = $typeFiltre;
        return $this;
    }
}
