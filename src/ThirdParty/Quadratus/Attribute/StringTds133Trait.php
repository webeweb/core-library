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
 * Tds133 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds133Trait {

    /**
     * Tds133.
     *
     * @var string
     */
    private $tds133;

    /**
     * Get the tds133.
     *
     * @return string Returns the tds133.
     */
    public function getTds133() {
        return $this->tds133;
    }

    /**
     * Set the tds133.
     *
     * @param string $tds133 The tds133.
     */
    public function setTds133($tds133) {
        $this->tds133 = $tds133;
        return $this;
    }
}
