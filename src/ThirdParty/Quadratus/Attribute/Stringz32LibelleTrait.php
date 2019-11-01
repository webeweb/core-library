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
 * z32 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz32LibelleTrait {

    /**
     * z32 libelle.
     *
     * @var string
     */
    private $z32Libelle;

    /**
     * Get the z32 libelle.
     *
     * @return string Returns the z32 libelle.
     */
    public function getz32Libelle() {
        return $this->z32Libelle;
    }

    /**
     * Set the z32 libelle.
     *
     * @param string $z32Libelle The z32 libelle.
     */
    public function setz32Libelle($z32Libelle) {
        $this->z32Libelle = $z32Libelle;
        return $this;
    }
}
