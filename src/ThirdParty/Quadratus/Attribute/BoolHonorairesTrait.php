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
 * Honoraires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHonorairesTrait {

    /**
     * Honoraires.
     *
     * @var bool
     */
    private $honoraires;

    /**
     * Get the honoraires.
     *
     * @return bool Returns the honoraires.
     */
    public function getHonoraires() {
        return $this->honoraires;
    }

    /**
     * Set the honoraires.
     *
     * @param bool $honoraires The honoraires.
     */
    public function setHonoraires($honoraires) {
        $this->honoraires = $honoraires;
        return $this;
    }
}
