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
 * Edi export fac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdiExportFacTrait {

    /**
     * Edi export fac.
     *
     * @var bool
     */
    private $ediExportFac;

    /**
     * Get the edi export fac.
     *
     * @return bool Returns the edi export fac.
     */
    public function getEdiExportFac() {
        return $this->ediExportFac;
    }

    /**
     * Set the edi export fac.
     *
     * @param bool $ediExportFac The edi export fac.
     */
    public function setEdiExportFac($ediExportFac) {
        $this->ediExportFac = $ediExportFac;
        return $this;
    }
}
