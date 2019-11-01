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
 * Intitule long trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleLongTrait {

    /**
     * Intitule long.
     *
     * @var string
     */
    private $intituleLong;

    /**
     * Get the intitule long.
     *
     * @return string Returns the intitule long.
     */
    public function getIntituleLong() {
        return $this->intituleLong;
    }

    /**
     * Set the intitule long.
     *
     * @param string $intituleLong The intitule long.
     */
    public function setIntituleLong($intituleLong) {
        $this->intituleLong = $intituleLong;
        return $this;
    }
}
