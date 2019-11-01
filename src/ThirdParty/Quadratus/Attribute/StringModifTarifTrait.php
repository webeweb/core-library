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
 * Modif tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifTarifTrait {

    /**
     * Modif tarif.
     *
     * @var string
     */
    private $modifTarif;

    /**
     * Get the modif tarif.
     *
     * @return string Returns the modif tarif.
     */
    public function getModifTarif() {
        return $this->modifTarif;
    }

    /**
     * Set the modif tarif.
     *
     * @param string $modifTarif The modif tarif.
     */
    public function setModifTarif($modifTarif) {
        $this->modifTarif = $modifTarif;
        return $this;
    }
}
