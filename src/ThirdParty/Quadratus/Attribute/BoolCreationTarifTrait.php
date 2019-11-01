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
 * Creation tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationTarifTrait {

    /**
     * Creation tarif.
     *
     * @var bool
     */
    private $creationTarif;

    /**
     * Get the creation tarif.
     *
     * @return bool Returns the creation tarif.
     */
    public function getCreationTarif() {
        return $this->creationTarif;
    }

    /**
     * Set the creation tarif.
     *
     * @param bool $creationTarif The creation tarif.
     */
    public function setCreationTarif($creationTarif) {
        $this->creationTarif = $creationTarif;
        return $this;
    }
}
