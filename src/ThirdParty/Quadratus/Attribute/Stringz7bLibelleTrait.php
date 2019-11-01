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
 * z7b libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz7bLibelleTrait {

    /**
     * z7b libelle.
     *
     * @var string
     */
    private $z7bLibelle;

    /**
     * Get the z7b libelle.
     *
     * @return string Returns the z7b libelle.
     */
    public function getz7bLibelle() {
        return $this->z7bLibelle;
    }

    /**
     * Set the z7b libelle.
     *
     * @param string $z7bLibelle The z7b libelle.
     */
    public function setz7bLibelle($z7bLibelle) {
        $this->z7bLibelle = $z7bLibelle;
        return $this;
    }
}
