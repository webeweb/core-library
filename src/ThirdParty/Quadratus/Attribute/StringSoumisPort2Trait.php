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
 * Soumis port2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSoumisPort2Trait {

    /**
     * Soumis port2.
     *
     * @var string
     */
    private $soumisPort2;

    /**
     * Get the soumis port2.
     *
     * @return string Returns the soumis port2.
     */
    public function getSoumisPort2() {
        return $this->soumisPort2;
    }

    /**
     * Set the soumis port2.
     *
     * @param string $soumisPort2 The soumis port2.
     */
    public function setSoumisPort2($soumisPort2) {
        $this->soumisPort2 = $soumisPort2;
        return $this;
    }
}
