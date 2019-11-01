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
 * Tvabic vir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvabicVirTrait {

    /**
     * Tvabic vir.
     *
     * @var string
     */
    private $tvabicVir;

    /**
     * Get the tvabic vir.
     *
     * @return string Returns the tvabic vir.
     */
    public function getTvabicVir() {
        return $this->tvabicVir;
    }

    /**
     * Set the tvabic vir.
     *
     * @param string $tvabicVir The tvabic vir.
     */
    public function setTvabicVir($tvabicVir) {
        $this->tvabicVir = $tvabicVir;
        return $this;
    }
}
