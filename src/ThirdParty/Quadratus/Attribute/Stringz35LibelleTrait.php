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
 * z35 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz35LibelleTrait {

    /**
     * z35 libelle.
     *
     * @var string
     */
    private $z35Libelle;

    /**
     * Get the z35 libelle.
     *
     * @return string Returns the z35 libelle.
     */
    public function getz35Libelle() {
        return $this->z35Libelle;
    }

    /**
     * Set the z35 libelle.
     *
     * @param string $z35Libelle The z35 libelle.
     */
    public function setz35Libelle($z35Libelle) {
        $this->z35Libelle = $z35Libelle;
        return $this;
    }
}
