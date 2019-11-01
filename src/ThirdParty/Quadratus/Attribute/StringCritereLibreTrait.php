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
 * Critere libre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereLibreTrait {

    /**
     * Critere libre.
     *
     * @var string
     */
    private $critereLibre;

    /**
     * Get the critere libre.
     *
     * @return string Returns the critere libre.
     */
    public function getCritereLibre() {
        return $this->critereLibre;
    }

    /**
     * Set the critere libre.
     *
     * @param string $critereLibre The critere libre.
     */
    public function setCritereLibre($critereLibre) {
        $this->critereLibre = $critereLibre;
        return $this;
    }
}
