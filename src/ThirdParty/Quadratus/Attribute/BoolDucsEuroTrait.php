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
 * Ducs euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDucsEuroTrait {

    /**
     * Ducs euro.
     *
     * @var bool
     */
    private $ducsEuro;

    /**
     * Get the ducs euro.
     *
     * @return bool Returns the ducs euro.
     */
    public function getDucsEuro() {
        return $this->ducsEuro;
    }

    /**
     * Set the ducs euro.
     *
     * @param bool $ducsEuro The ducs euro.
     */
    public function setDucsEuro($ducsEuro) {
        $this->ducsEuro = $ducsEuro;
        return $this;
    }
}
