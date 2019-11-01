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
 * Pdf bt employes ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtEmployesRefTrait {

    /**
     * Pdf bt employes ref.
     *
     * @var bool
     */
    private $pdfBtEmployesRef;

    /**
     * Get the pdf bt employes ref.
     *
     * @return bool Returns the pdf bt employes ref.
     */
    public function getPdfBtEmployesRef() {
        return $this->pdfBtEmployesRef;
    }

    /**
     * Set the pdf bt employes ref.
     *
     * @param bool $pdfBtEmployesRef The pdf bt employes ref.
     */
    public function setPdfBtEmployesRef($pdfBtEmployesRef) {
        $this->pdfBtEmployesRef = $pdfBtEmployesRef;
        return $this;
    }
}
