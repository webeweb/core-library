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
 * Pdf bt date passage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtDatePassageTrait {

    /**
     * Pdf bt date passage.
     *
     * @var bool
     */
    private $pdfBtDatePassage;

    /**
     * Get the pdf bt date passage.
     *
     * @return bool Returns the pdf bt date passage.
     */
    public function getPdfBtDatePassage() {
        return $this->pdfBtDatePassage;
    }

    /**
     * Set the pdf bt date passage.
     *
     * @param bool $pdfBtDatePassage The pdf bt date passage.
     */
    public function setPdfBtDatePassage($pdfBtDatePassage) {
        $this->pdfBtDatePassage = $pdfBtDatePassage;
        return $this;
    }
}
