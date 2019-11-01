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
 * Uniq id pdf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdPdfTrait {

    /**
     * Uniq id pdf.
     *
     * @var string
     */
    private $uniqIdPdf;

    /**
     * Get the uniq id pdf.
     *
     * @return string Returns the uniq id pdf.
     */
    public function getUniqIdPdf() {
        return $this->uniqIdPdf;
    }

    /**
     * Set the uniq id pdf.
     *
     * @param string $uniqIdPdf The uniq id pdf.
     */
    public function setUniqIdPdf($uniqIdPdf) {
        $this->uniqIdPdf = $uniqIdPdf;
        return $this;
    }
}
