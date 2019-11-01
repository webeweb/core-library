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
 * z35 b libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz35BLibelleTrait {

    /**
     * z35 b libelle.
     *
     * @var string
     */
    private $z35BLibelle;

    /**
     * Get the z35 b libelle.
     *
     * @return string Returns the z35 b libelle.
     */
    public function getz35BLibelle() {
        return $this->z35BLibelle;
    }

    /**
     * Set the z35 b libelle.
     *
     * @param string $z35BLibelle The z35 b libelle.
     */
    public function setz35BLibelle($z35BLibelle) {
        $this->z35BLibelle = $z35BLibelle;
        return $this;
    }
}
