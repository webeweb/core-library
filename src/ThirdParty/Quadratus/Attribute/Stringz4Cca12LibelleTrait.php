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
 * z4 cca12 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Cca12LibelleTrait {

    /**
     * z4 cca12 libelle.
     *
     * @var string
     */
    private $z4Cca12Libelle;

    /**
     * Get the z4 cca12 libelle.
     *
     * @return string Returns the z4 cca12 libelle.
     */
    public function getz4Cca12Libelle() {
        return $this->z4Cca12Libelle;
    }

    /**
     * Set the z4 cca12 libelle.
     *
     * @param string $z4Cca12Libelle The z4 cca12 libelle.
     */
    public function setz4Cca12Libelle($z4Cca12Libelle) {
        $this->z4Cca12Libelle = $z4Cca12Libelle;
        return $this;
    }
}
