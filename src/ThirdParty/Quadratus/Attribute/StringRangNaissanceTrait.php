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
 * Rang naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRangNaissanceTrait {

    /**
     * Rang naissance.
     *
     * @var string
     */
    private $rangNaissance;

    /**
     * Get the rang naissance.
     *
     * @return string Returns the rang naissance.
     */
    public function getRangNaissance() {
        return $this->rangNaissance;
    }

    /**
     * Set the rang naissance.
     *
     * @param string $rangNaissance The rang naissance.
     */
    public function setRangNaissance($rangNaissance) {
        $this->rangNaissance = $rangNaissance;
        return $this;
    }
}
