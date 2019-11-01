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
 * Art151 duree deja etalee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArt151DureeDejaEtaleeTrait {

    /**
     * Art151 duree deja etalee.
     *
     * @var string
     */
    private $art151DureeDejaEtalee;

    /**
     * Get the art151 duree deja etalee.
     *
     * @return string Returns the art151 duree deja etalee.
     */
    public function getArt151DureeDejaEtalee() {
        return $this->art151DureeDejaEtalee;
    }

    /**
     * Set the art151 duree deja etalee.
     *
     * @param string $art151DureeDejaEtalee The art151 duree deja etalee.
     */
    public function setArt151DureeDejaEtalee($art151DureeDejaEtalee) {
        $this->art151DureeDejaEtalee = $art151DureeDejaEtalee;
        return $this;
    }
}
