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
 * X fer cpta lst dc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCptaLstDcTrait {

    /**
     * X fer cpta lst dc.
     *
     * @var string
     */
    private $xFerCptaLstDc;

    /**
     * Get the x fer cpta lst dc.
     *
     * @return string Returns the x fer cpta lst dc.
     */
    public function getXFerCptaLstDc() {
        return $this->xFerCptaLstDc;
    }

    /**
     * Set the x fer cpta lst dc.
     *
     * @param string $xFerCptaLstDc The x fer cpta lst dc.
     */
    public function setXFerCptaLstDc($xFerCptaLstDc) {
        $this->xFerCptaLstDc = $xFerCptaLstDc;
        return $this;
    }
}
