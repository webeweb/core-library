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
 * Insp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInspTrait {

    /**
     * Insp.
     *
     * @var string
     */
    private $insp;

    /**
     * Get the insp.
     *
     * @return string Returns the insp.
     */
    public function getInsp() {
        return $this->insp;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }
}
