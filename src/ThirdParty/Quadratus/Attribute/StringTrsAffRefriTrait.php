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
 * Trs aff refri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsAffRefriTrait {

    /**
     * Trs aff refri.
     *
     * @var string
     */
    private $trsAffRefri;

    /**
     * Get the trs aff refri.
     *
     * @return string Returns the trs aff refri.
     */
    public function getTrsAffRefri() {
        return $this->trsAffRefri;
    }

    /**
     * Set the trs aff refri.
     *
     * @param string $trsAffRefri The trs aff refri.
     */
    public function setTrsAffRefri($trsAffRefri) {
        $this->trsAffRefri = $trsAffRefri;
        return $this;
    }
}
