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
 * Pdf bt libelle date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPdfBtLibelleDateTrait {

    /**
     * Pdf bt libelle date.
     *
     * @var string
     */
    private $pdfBtLibelleDate;

    /**
     * Get the pdf bt libelle date.
     *
     * @return string Returns the pdf bt libelle date.
     */
    public function getPdfBtLibelleDate() {
        return $this->pdfBtLibelleDate;
    }

    /**
     * Set the pdf bt libelle date.
     *
     * @param string $pdfBtLibelleDate The pdf bt libelle date.
     */
    public function setPdfBtLibelleDate($pdfBtLibelleDate) {
        $this->pdfBtLibelleDate = $pdfBtLibelleDate;
        return $this;
    }
}
