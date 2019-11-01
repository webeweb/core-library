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
 * Pj mail c li ducs edi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPjMailCLiDucsEdiTrait {

    /**
     * Pj mail c li ducs edi.
     *
     * @var bool
     */
    private $pjMailCLiDucsEdi;

    /**
     * Get the pj mail c li ducs edi.
     *
     * @return bool Returns the pj mail c li ducs edi.
     */
    public function getPjMailCLiDucsEdi() {
        return $this->pjMailCLiDucsEdi;
    }

    /**
     * Set the pj mail c li ducs edi.
     *
     * @param bool $pjMailCLiDucsEdi The pj mail c li ducs edi.
     */
    public function setPjMailCLiDucsEdi($pjMailCLiDucsEdi) {
        $this->pjMailCLiDucsEdi = $pjMailCLiDucsEdi;
        return $this;
    }
}
