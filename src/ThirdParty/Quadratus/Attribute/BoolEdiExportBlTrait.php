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
 * Edi export bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdiExportBlTrait {

    /**
     * Edi export bl.
     *
     * @var bool
     */
    private $ediExportBl;

    /**
     * Get the edi export bl.
     *
     * @return bool Returns the edi export bl.
     */
    public function getEdiExportBl() {
        return $this->ediExportBl;
    }

    /**
     * Set the edi export bl.
     *
     * @param bool $ediExportBl The edi export bl.
     */
    public function setEdiExportBl($ediExportBl) {
        $this->ediExportBl = $ediExportBl;
        return $this;
    }
}
