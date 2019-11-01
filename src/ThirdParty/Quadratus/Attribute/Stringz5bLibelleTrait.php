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
 * z5b libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz5bLibelleTrait {

    /**
     * z5b libelle.
     *
     * @var string
     */
    private $z5bLibelle;

    /**
     * Get the z5b libelle.
     *
     * @return string Returns the z5b libelle.
     */
    public function getz5bLibelle() {
        return $this->z5bLibelle;
    }

    /**
     * Set the z5b libelle.
     *
     * @param string $z5bLibelle The z5b libelle.
     */
    public function setz5bLibelle($z5bLibelle) {
        $this->z5bLibelle = $z5bLibelle;
        return $this;
    }
}
