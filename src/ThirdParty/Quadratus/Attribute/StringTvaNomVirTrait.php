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
 * Tva nom vir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaNomVirTrait {

    /**
     * Tva nom vir.
     *
     * @var string
     */
    private $tvaNomVir;

    /**
     * Get the tva nom vir.
     *
     * @return string Returns the tva nom vir.
     */
    public function getTvaNomVir() {
        return $this->tvaNomVir;
    }

    /**
     * Set the tva nom vir.
     *
     * @param string $tvaNomVir The tva nom vir.
     */
    public function setTvaNomVir($tvaNomVir) {
        $this->tvaNomVir = $tvaNomVir;
        return $this;
    }
}
