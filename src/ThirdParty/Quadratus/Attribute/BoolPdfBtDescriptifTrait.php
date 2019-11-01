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
 * Pdf bt descriptif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtDescriptifTrait {

    /**
     * Pdf bt descriptif.
     *
     * @var bool
     */
    private $pdfBtDescriptif;

    /**
     * Get the pdf bt descriptif.
     *
     * @return bool Returns the pdf bt descriptif.
     */
    public function getPdfBtDescriptif() {
        return $this->pdfBtDescriptif;
    }

    /**
     * Set the pdf bt descriptif.
     *
     * @param bool $pdfBtDescriptif The pdf bt descriptif.
     */
    public function setPdfBtDescriptif($pdfBtDescriptif) {
        $this->pdfBtDescriptif = $pdfBtDescriptif;
        return $this;
    }
}
