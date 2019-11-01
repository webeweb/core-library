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
 * Tds59 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds59Trait {

    /**
     * Tds59.
     *
     * @var string
     */
    private $tds59;

    /**
     * Get the tds59.
     *
     * @return string Returns the tds59.
     */
    public function getTds59() {
        return $this->tds59;
    }

    /**
     * Set the tds59.
     *
     * @param string $tds59 The tds59.
     */
    public function setTds59($tds59) {
        $this->tds59 = $tds59;
        return $this;
    }
}
