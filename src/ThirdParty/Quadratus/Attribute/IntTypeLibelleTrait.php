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
 * Type libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeLibelleTrait {

    /**
     * Type libelle.
     *
     * @var int
     */
    private $typeLibelle;

    /**
     * Get the type libelle.
     *
     * @return int Returns the type libelle.
     */
    public function getTypeLibelle() {
        return $this->typeLibelle;
    }

    /**
     * Set the type libelle.
     *
     * @param int $typeLibelle The type libelle.
     */
    public function setTypeLibelle($typeLibelle) {
        $this->typeLibelle = $typeLibelle;
        return $this;
    }
}
