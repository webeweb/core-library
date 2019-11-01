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
 * Trs categ march trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCategMarchTrait {

    /**
     * Trs categ march.
     *
     * @var string
     */
    private $trsCategMarch;

    /**
     * Get the trs categ march.
     *
     * @return string Returns the trs categ march.
     */
    public function getTrsCategMarch() {
        return $this->trsCategMarch;
    }

    /**
     * Set the trs categ march.
     *
     * @param string $trsCategMarch The trs categ march.
     */
    public function setTrsCategMarch($trsCategMarch) {
        $this->trsCategMarch = $trsCategMarch;
        return $this;
    }
}
