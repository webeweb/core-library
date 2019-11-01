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
 * No rib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoRibTrait {

    /**
     * No rib.
     *
     * @var string
     */
    private $noRib;

    /**
     * Get the no rib.
     *
     * @return string Returns the no rib.
     */
    public function getNoRib() {
        return $this->noRib;
    }

    /**
     * Set the no rib.
     *
     * @param string $noRib The no rib.
     */
    public function setNoRib($noRib) {
        $this->noRib = $noRib;
        return $this;
    }
}
