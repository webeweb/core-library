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
 * Code ducs specif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDucsSpecifTrait {

    /**
     * Code ducs specif.
     *
     * @var string
     */
    private $codeDucsSpecif;

    /**
     * Get the code ducs specif.
     *
     * @return string Returns the code ducs specif.
     */
    public function getCodeDucsSpecif() {
        return $this->codeDucsSpecif;
    }

    /**
     * Set the code ducs specif.
     *
     * @param string $codeDucsSpecif The code ducs specif.
     */
    public function setCodeDucsSpecif($codeDucsSpecif) {
        $this->codeDucsSpecif = $codeDucsSpecif;
        return $this;
    }
}
