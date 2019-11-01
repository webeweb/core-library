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
 * Societe interim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSocieteInterimTrait {

    /**
     * Societe interim.
     *
     * @var bool
     */
    private $societeInterim;

    /**
     * Get the societe interim.
     *
     * @return bool Returns the societe interim.
     */
    public function getSocieteInterim() {
        return $this->societeInterim;
    }

    /**
     * Set the societe interim.
     *
     * @param bool $societeInterim The societe interim.
     */
    public function setSocieteInterim($societeInterim) {
        $this->societeInterim = $societeInterim;
        return $this;
    }
}
