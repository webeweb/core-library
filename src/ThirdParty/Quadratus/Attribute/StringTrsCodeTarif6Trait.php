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
 * Trs code tarif6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif6Trait {

    /**
     * Trs code tarif6.
     *
     * @var string
     */
    private $trsCodeTarif6;

    /**
     * Get the trs code tarif6.
     *
     * @return string Returns the trs code tarif6.
     */
    public function getTrsCodeTarif6() {
        return $this->trsCodeTarif6;
    }

    /**
     * Set the trs code tarif6.
     *
     * @param string $trsCodeTarif6 The trs code tarif6.
     */
    public function setTrsCodeTarif6($trsCodeTarif6) {
        $this->trsCodeTarif6 = $trsCodeTarif6;
        return $this;
    }
}
