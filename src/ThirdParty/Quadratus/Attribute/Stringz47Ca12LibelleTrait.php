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
 * z47 ca12 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz47Ca12LibelleTrait {

    /**
     * z47 ca12 libelle.
     *
     * @var string
     */
    private $z47Ca12Libelle;

    /**
     * Get the z47 ca12 libelle.
     *
     * @return string Returns the z47 ca12 libelle.
     */
    public function getz47Ca12Libelle() {
        return $this->z47Ca12Libelle;
    }

    /**
     * Set the z47 ca12 libelle.
     *
     * @param string $z47Ca12Libelle The z47 ca12 libelle.
     */
    public function setz47Ca12Libelle($z47Ca12Libelle) {
        $this->z47Ca12Libelle = $z47Ca12Libelle;
        return $this;
    }
}
