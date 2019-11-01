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
 * Trs code tarif1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif1Trait {

    /**
     * Trs code tarif1.
     *
     * @var string
     */
    private $trsCodeTarif1;

    /**
     * Get the trs code tarif1.
     *
     * @return string Returns the trs code tarif1.
     */
    public function getTrsCodeTarif1() {
        return $this->trsCodeTarif1;
    }

    /**
     * Set the trs code tarif1.
     *
     * @param string $trsCodeTarif1 The trs code tarif1.
     */
    public function setTrsCodeTarif1($trsCodeTarif1) {
        $this->trsCodeTarif1 = $trsCodeTarif1;
        return $this;
    }
}
