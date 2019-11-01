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
 * Type heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeHeureTrait {

    /**
     * Type heure.
     *
     * @var string
     */
    private $typeHeure;

    /**
     * Get the type heure.
     *
     * @return string Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
