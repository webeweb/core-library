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
 * Pdf bt coefficient trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPdfBtCoefficientTrait {

    /**
     * Pdf bt coefficient.
     *
     * @var float
     */
    private $pdfBtCoefficient;

    /**
     * Get the pdf bt coefficient.
     *
     * @return float Returns the pdf bt coefficient.
     */
    public function getPdfBtCoefficient() {
        return $this->pdfBtCoefficient;
    }

    /**
     * Set the pdf bt coefficient.
     *
     * @param float $pdfBtCoefficient The pdf bt coefficient.
     */
    public function setPdfBtCoefficient($pdfBtCoefficient) {
        $this->pdfBtCoefficient = $pdfBtCoefficient;
        return $this;
    }
}
