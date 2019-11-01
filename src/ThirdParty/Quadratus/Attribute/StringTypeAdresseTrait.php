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
 * Type adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAdresseTrait {

    /**
     * Type adresse.
     *
     * @var string
     */
    private $typeAdresse;

    /**
     * Get the type adresse.
     *
     * @return string Returns the type adresse.
     */
    public function getTypeAdresse() {
        return $this->typeAdresse;
    }

    /**
     * Set the type adresse.
     *
     * @param string $typeAdresse The type adresse.
     */
    public function setTypeAdresse($typeAdresse) {
        $this->typeAdresse = $typeAdresse;
        return $this;
    }
}
