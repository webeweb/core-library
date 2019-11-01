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
 * z45 ca12 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz45Ca12LibelleTrait {

    /**
     * z45 ca12 libelle.
     *
     * @var string
     */
    private $z45Ca12Libelle;

    /**
     * Get the z45 ca12 libelle.
     *
     * @return string Returns the z45 ca12 libelle.
     */
    public function getz45Ca12Libelle() {
        return $this->z45Ca12Libelle;
    }

    /**
     * Set the z45 ca12 libelle.
     *
     * @param string $z45Ca12Libelle The z45 ca12 libelle.
     */
    public function setz45Ca12Libelle($z45Ca12Libelle) {
        $this->z45Ca12Libelle = $z45Ca12Libelle;
        return $this;
    }
}
