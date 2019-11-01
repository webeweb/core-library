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
 * Autre rib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreRibTrait {

    /**
     * Autre rib.
     *
     * @var string
     */
    private $autreRib;

    /**
     * Get the autre rib.
     *
     * @return string Returns the autre rib.
     */
    public function getAutreRib() {
        return $this->autreRib;
    }

    /**
     * Set the autre rib.
     *
     * @param string $autreRib The autre rib.
     */
    public function setAutreRib($autreRib) {
        $this->autreRib = $autreRib;
        return $this;
    }
}
