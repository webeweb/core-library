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
 * Trs code tarif5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif5Trait {

    /**
     * Trs code tarif5.
     *
     * @var string
     */
    private $trsCodeTarif5;

    /**
     * Get the trs code tarif5.
     *
     * @return string Returns the trs code tarif5.
     */
    public function getTrsCodeTarif5() {
        return $this->trsCodeTarif5;
    }

    /**
     * Set the trs code tarif5.
     *
     * @param string $trsCodeTarif5 The trs code tarif5.
     */
    public function setTrsCodeTarif5($trsCodeTarif5) {
        $this->trsCodeTarif5 = $trsCodeTarif5;
        return $this;
    }
}
