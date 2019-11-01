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
 * No doss fact cab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoDossFactCabTrait {

    /**
     * No doss fact cab.
     *
     * @var string
     */
    private $noDossFactCab;

    /**
     * Get the no doss fact cab.
     *
     * @return string Returns the no doss fact cab.
     */
    public function getNoDossFactCab() {
        return $this->noDossFactCab;
    }

    /**
     * Set the no doss fact cab.
     *
     * @param string $noDossFactCab The no doss fact cab.
     */
    public function setNoDossFactCab($noDossFactCab) {
        $this->noDossFactCab = $noDossFactCab;
        return $this;
    }
}
