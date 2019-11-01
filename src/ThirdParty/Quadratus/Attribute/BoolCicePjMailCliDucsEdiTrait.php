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
 * Cice pj mail cli ducs edi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCicePjMailCliDucsEdiTrait {

    /**
     * Cice pj mail cli ducs edi.
     *
     * @var bool
     */
    private $cicePjMailCliDucsEdi;

    /**
     * Get the cice pj mail cli ducs edi.
     *
     * @return bool Returns the cice pj mail cli ducs edi.
     */
    public function getCicePjMailCliDucsEdi() {
        return $this->cicePjMailCliDucsEdi;
    }

    /**
     * Set the cice pj mail cli ducs edi.
     *
     * @param bool $cicePjMailCliDucsEdi The cice pj mail cli ducs edi.
     */
    public function setCicePjMailCliDucsEdi($cicePjMailCliDucsEdi) {
        $this->cicePjMailCliDucsEdi = $cicePjMailCliDucsEdi;
        return $this;
    }
}
