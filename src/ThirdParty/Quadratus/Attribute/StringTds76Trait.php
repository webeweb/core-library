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
 * Tds76 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds76Trait {

    /**
     * Tds76.
     *
     * @var string
     */
    private $tds76;

    /**
     * Get the tds76.
     *
     * @return string Returns the tds76.
     */
    public function getTds76() {
        return $this->tds76;
    }

    /**
     * Set the tds76.
     *
     * @param string $tds76 The tds76.
     */
    public function setTds76($tds76) {
        $this->tds76 = $tds76;
        return $this;
    }
}
