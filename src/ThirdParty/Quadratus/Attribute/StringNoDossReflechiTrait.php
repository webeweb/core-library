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
 * No doss reflechi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoDossReflechiTrait {

    /**
     * No doss reflechi.
     *
     * @var string
     */
    private $noDossReflechi;

    /**
     * Get the no doss reflechi.
     *
     * @return string Returns the no doss reflechi.
     */
    public function getNoDossReflechi() {
        return $this->noDossReflechi;
    }

    /**
     * Set the no doss reflechi.
     *
     * @param string $noDossReflechi The no doss reflechi.
     */
    public function setNoDossReflechi($noDossReflechi) {
        $this->noDossReflechi = $noDossReflechi;
        return $this;
    }
}
