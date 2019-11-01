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
 * Tds47 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds47Trait {

    /**
     * Tds47.
     *
     * @var string
     */
    private $tds47;

    /**
     * Get the tds47.
     *
     * @return string Returns the tds47.
     */
    public function getTds47() {
        return $this->tds47;
    }

    /**
     * Set the tds47.
     *
     * @param string $tds47 The tds47.
     */
    public function setTds47($tds47) {
        $this->tds47 = $tds47;
        return $this;
    }
}
