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
 * Tvaiban vir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaibanVirTrait {

    /**
     * Tvaiban vir.
     *
     * @var string
     */
    private $tvaibanVir;

    /**
     * Get the tvaiban vir.
     *
     * @return string Returns the tvaiban vir.
     */
    public function getTvaibanVir() {
        return $this->tvaibanVir;
    }

    /**
     * Set the tvaiban vir.
     *
     * @param string $tvaibanVir The tvaiban vir.
     */
    public function setTvaibanVir($tvaibanVir) {
        $this->tvaibanVir = $tvaibanVir;
        return $this;
    }
}
