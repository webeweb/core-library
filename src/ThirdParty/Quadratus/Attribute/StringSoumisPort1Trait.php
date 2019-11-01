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
 * Soumis port1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSoumisPort1Trait {

    /**
     * Soumis port1.
     *
     * @var string
     */
    private $soumisPort1;

    /**
     * Get the soumis port1.
     *
     * @return string Returns the soumis port1.
     */
    public function getSoumisPort1() {
        return $this->soumisPort1;
    }

    /**
     * Set the soumis port1.
     *
     * @param string $soumisPort1 The soumis port1.
     */
    public function setSoumisPort1($soumisPort1) {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }
}
