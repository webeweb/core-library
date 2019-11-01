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
 * Pdf bt facturer ala validation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtFacturerAlaValidationTrait {

    /**
     * Pdf bt facturer ala validation.
     *
     * @var bool
     */
    private $pdfBtFacturerAlaValidation;

    /**
     * Get the pdf bt facturer ala validation.
     *
     * @return bool Returns the pdf bt facturer ala validation.
     */
    public function getPdfBtFacturerAlaValidation() {
        return $this->pdfBtFacturerAlaValidation;
    }

    /**
     * Set the pdf bt facturer ala validation.
     *
     * @param bool $pdfBtFacturerAlaValidation The pdf bt facturer ala validation.
     */
    public function setPdfBtFacturerAlaValidation($pdfBtFacturerAlaValidation) {
        $this->pdfBtFacturerAlaValidation = $pdfBtFacturerAlaValidation;
        return $this;
    }
}
