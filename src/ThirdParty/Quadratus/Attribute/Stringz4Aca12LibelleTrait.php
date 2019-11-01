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
 * z4 aca12 libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Aca12LibelleTrait {

    /**
     * z4 aca12 libelle.
     *
     * @var string
     */
    private $z4Aca12Libelle;

    /**
     * Get the z4 aca12 libelle.
     *
     * @return string Returns the z4 aca12 libelle.
     */
    public function getz4Aca12Libelle() {
        return $this->z4Aca12Libelle;
    }

    /**
     * Set the z4 aca12 libelle.
     *
     * @param string $z4Aca12Libelle The z4 aca12 libelle.
     */
    public function setz4Aca12Libelle($z4Aca12Libelle) {
        $this->z4Aca12Libelle = $z4Aca12Libelle;
        return $this;
    }
}
