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
 * Intitule ita trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleItaTrait {

    /**
     * Intitule ita.
     *
     * @var string
     */
    private $intituleIta;

    /**
     * Get the intitule ita.
     *
     * @return string Returns the intitule ita.
     */
    public function getIntituleIta() {
        return $this->intituleIta;
    }

    /**
     * Set the intitule ita.
     *
     * @param string $intituleIta The intitule ita.
     */
    public function setIntituleIta($intituleIta) {
        $this->intituleIta = $intituleIta;
        return $this;
    }
}
