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
 * z4 bca12 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Bca12LibelleTrait {

    /**
     * z4 bca12 libelle.
     *
     * @var string
     */
    private $z4Bca12Libelle;

    /**
     * Get the z4 bca12 libelle.
     *
     * @return string Returns the z4 bca12 libelle.
     */
    public function getz4Bca12Libelle() {
        return $this->z4Bca12Libelle;
    }

    /**
     * Set the z4 bca12 libelle.
     *
     * @param string $z4Bca12Libelle The z4 bca12 libelle.
     */
    public function setz4Bca12Libelle($z4Bca12Libelle) {
        $this->z4Bca12Libelle = $z4Bca12Libelle;
        return $this;
    }
}
