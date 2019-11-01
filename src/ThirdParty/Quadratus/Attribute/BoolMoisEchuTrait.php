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
 * Mois echu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMoisEchuTrait {

    /**
     * Mois echu.
     *
     * @var bool
     */
    private $moisEchu;

    /**
     * Get the mois echu.
     *
     * @return bool Returns the mois echu.
     */
    public function getMoisEchu() {
        return $this->moisEchu;
    }

    /**
     * Set the mois echu.
     *
     * @param bool $moisEchu The mois echu.
     */
    public function setMoisEchu($moisEchu) {
        $this->moisEchu = $moisEchu;
        return $this;
    }
}
