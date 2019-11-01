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
 * Trs code tarif3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif3Trait {

    /**
     * Trs code tarif3.
     *
     * @var string
     */
    private $trsCodeTarif3;

    /**
     * Get the trs code tarif3.
     *
     * @return string Returns the trs code tarif3.
     */
    public function getTrsCodeTarif3() {
        return $this->trsCodeTarif3;
    }

    /**
     * Set the trs code tarif3.
     *
     * @param string $trsCodeTarif3 The trs code tarif3.
     */
    public function setTrsCodeTarif3($trsCodeTarif3) {
        $this->trsCodeTarif3 = $trsCodeTarif3;
        return $this;
    }
}
