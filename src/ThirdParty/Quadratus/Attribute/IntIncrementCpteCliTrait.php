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
 * Increment cpte cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIncrementCpteCliTrait {

    /**
     * Increment cpte cli.
     *
     * @var int
     */
    private $incrementCpteCli;

    /**
     * Get the increment cpte cli.
     *
     * @return int Returns the increment cpte cli.
     */
    public function getIncrementCpteCli() {
        return $this->incrementCpteCli;
    }

    /**
     * Set the increment cpte cli.
     *
     * @param int $incrementCpteCli The increment cpte cli.
     */
    public function setIncrementCpteCli($incrementCpteCli) {
        $this->incrementCpteCli = $incrementCpteCli;
        return $this;
    }
}
