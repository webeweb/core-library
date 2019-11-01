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
 * Trs aff prod chim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsAffProdChimTrait {

    /**
     * Trs aff prod chim.
     *
     * @var string
     */
    private $trsAffProdChim;

    /**
     * Get the trs aff prod chim.
     *
     * @return string Returns the trs aff prod chim.
     */
    public function getTrsAffProdChim() {
        return $this->trsAffProdChim;
    }

    /**
     * Set the trs aff prod chim.
     *
     * @param string $trsAffProdChim The trs aff prod chim.
     */
    public function setTrsAffProdChim($trsAffProdChim) {
        $this->trsAffProdChim = $trsAffProdChim;
        return $this;
    }
}
