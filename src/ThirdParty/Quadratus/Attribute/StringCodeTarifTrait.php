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
 * Code tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTarifTrait {

    /**
     * Code tarif.
     *
     * @var string
     */
    private $codeTarif;

    /**
     * Get the code tarif.
     *
     * @return string Returns the code tarif.
     */
    public function getCodeTarif() {
        return $this->codeTarif;
    }

    /**
     * Set the code tarif.
     *
     * @param string $codeTarif The code tarif.
     */
    public function setCodeTarif($codeTarif) {
        $this->codeTarif = $codeTarif;
        return $this;
    }
}
