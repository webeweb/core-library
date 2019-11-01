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
 * Pdf bt periode validite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtPeriodeValiditeTrait {

    /**
     * Pdf bt periode validite.
     *
     * @var bool
     */
    private $pdfBtPeriodeValidite;

    /**
     * Get the pdf bt periode validite.
     *
     * @return bool Returns the pdf bt periode validite.
     */
    public function getPdfBtPeriodeValidite() {
        return $this->pdfBtPeriodeValidite;
    }

    /**
     * Set the pdf bt periode validite.
     *
     * @param bool $pdfBtPeriodeValidite The pdf bt periode validite.
     */
    public function setPdfBtPeriodeValidite($pdfBtPeriodeValidite) {
        $this->pdfBtPeriodeValidite = $pdfBtPeriodeValidite;
        return $this;
    }
}
