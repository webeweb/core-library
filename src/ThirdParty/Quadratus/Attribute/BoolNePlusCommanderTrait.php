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
 * Ne plus commander trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePlusCommanderTrait {

    /**
     * Ne plus commander.
     *
     * @var bool
     */
    private $nePlusCommander;

    /**
     * Get the ne plus commander.
     *
     * @return bool Returns the ne plus commander.
     */
    public function getNePlusCommander() {
        return $this->nePlusCommander;
    }

    /**
     * Set the ne plus commander.
     *
     * @param bool $nePlusCommander The ne plus commander.
     */
    public function setNePlusCommander($nePlusCommander) {
        $this->nePlusCommander = $nePlusCommander;
        return $this;
    }
}
