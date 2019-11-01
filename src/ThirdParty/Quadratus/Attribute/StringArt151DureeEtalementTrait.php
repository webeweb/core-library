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
 * Art151 duree etalement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArt151DureeEtalementTrait {

    /**
     * Art151 duree etalement.
     *
     * @var string
     */
    private $art151DureeEtalement;

    /**
     * Get the art151 duree etalement.
     *
     * @return string Returns the art151 duree etalement.
     */
    public function getArt151DureeEtalement() {
        return $this->art151DureeEtalement;
    }

    /**
     * Set the art151 duree etalement.
     *
     * @param string $art151DureeEtalement The art151 duree etalement.
     */
    public function setArt151DureeEtalement($art151DureeEtalement) {
        $this->art151DureeEtalement = $art151DureeEtalement;
        return $this;
    }
}
