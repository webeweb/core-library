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
 * Exo lodeom renforcee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoLodeomRenforceeTrait {

    /**
     * Exo lodeom renforcee.
     *
     * @var bool
     */
    private $exoLodeomRenforcee;

    /**
     * Get the exo lodeom renforcee.
     *
     * @return bool Returns the exo lodeom renforcee.
     */
    public function getExoLodeomRenforcee() {
        return $this->exoLodeomRenforcee;
    }

    /**
     * Set the exo lodeom renforcee.
     *
     * @param bool $exoLodeomRenforcee The exo lodeom renforcee.
     */
    public function setExoLodeomRenforcee($exoLodeomRenforcee) {
        $this->exoLodeomRenforcee = $exoLodeomRenforcee;
        return $this;
    }
}
