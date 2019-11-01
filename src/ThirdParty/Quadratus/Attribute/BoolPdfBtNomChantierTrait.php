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
 * Pdf bt nom chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtNomChantierTrait {

    /**
     * Pdf bt nom chantier.
     *
     * @var bool
     */
    private $pdfBtNomChantier;

    /**
     * Get the pdf bt nom chantier.
     *
     * @return bool Returns the pdf bt nom chantier.
     */
    public function getPdfBtNomChantier() {
        return $this->pdfBtNomChantier;
    }

    /**
     * Set the pdf bt nom chantier.
     *
     * @param bool $pdfBtNomChantier The pdf bt nom chantier.
     */
    public function setPdfBtNomChantier($pdfBtNomChantier) {
        $this->pdfBtNomChantier = $pdfBtNomChantier;
        return $this;
    }
}
