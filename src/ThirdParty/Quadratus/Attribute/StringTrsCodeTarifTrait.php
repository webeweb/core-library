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
 * Trs code tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarifTrait {

    /**
     * Trs code tarif.
     *
     * @var string
     */
    private $trsCodeTarif;

    /**
     * Get the trs code tarif.
     *
     * @return string Returns the trs code tarif.
     */
    public function getTrsCodeTarif() {
        return $this->trsCodeTarif;
    }

    /**
     * Set the trs code tarif.
     *
     * @param string $trsCodeTarif The trs code tarif.
     */
    public function setTrsCodeTarif($trsCodeTarif) {
        $this->trsCodeTarif = $trsCodeTarif;
        return $this;
    }
}
