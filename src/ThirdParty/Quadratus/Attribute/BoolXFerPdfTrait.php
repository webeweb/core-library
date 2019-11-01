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
 * X fer pdf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerPdfTrait {

    /**
     * X fer pdf.
     *
     * @var bool
     */
    private $xFerPdf;

    /**
     * Get the x fer pdf.
     *
     * @return bool Returns the x fer pdf.
     */
    public function getXFerPdf() {
        return $this->xFerPdf;
    }

    /**
     * Set the x fer pdf.
     *
     * @param bool $xFerPdf The x fer pdf.
     */
    public function setXFerPdf($xFerPdf) {
        $this->xFerPdf = $xFerPdf;
        return $this;
    }
}
