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
 * Trs code tarif4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif4Trait {

    /**
     * Trs code tarif4.
     *
     * @var string
     */
    private $trsCodeTarif4;

    /**
     * Get the trs code tarif4.
     *
     * @return string Returns the trs code tarif4.
     */
    public function getTrsCodeTarif4() {
        return $this->trsCodeTarif4;
    }

    /**
     * Set the trs code tarif4.
     *
     * @param string $trsCodeTarif4 The trs code tarif4.
     */
    public function setTrsCodeTarif4($trsCodeTarif4) {
        $this->trsCodeTarif4 = $trsCodeTarif4;
        return $this;
    }
}
