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
 * Trs code tarif2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif2Trait {

    /**
     * Trs code tarif2.
     *
     * @var string
     */
    private $trsCodeTarif2;

    /**
     * Get the trs code tarif2.
     *
     * @return string Returns the trs code tarif2.
     */
    public function getTrsCodeTarif2() {
        return $this->trsCodeTarif2;
    }

    /**
     * Set the trs code tarif2.
     *
     * @param string $trsCodeTarif2 The trs code tarif2.
     */
    public function setTrsCodeTarif2($trsCodeTarif2) {
        $this->trsCodeTarif2 = $trsCodeTarif2;
        return $this;
    }
}
