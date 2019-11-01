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
 * Rep partielle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepPartielleTrait {

    /**
     * Rep partielle.
     *
     * @var bool
     */
    private $repPartielle;

    /**
     * Get the rep partielle.
     *
     * @return bool Returns the rep partielle.
     */
    public function getRepPartielle() {
        return $this->repPartielle;
    }

    /**
     * Set the rep partielle.
     *
     * @param bool $repPartielle The rep partielle.
     */
    public function setRepPartielle($repPartielle) {
        $this->repPartielle = $repPartielle;
        return $this;
    }
}
