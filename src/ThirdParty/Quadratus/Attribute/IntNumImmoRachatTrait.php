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
 * Num immo rachat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumImmoRachatTrait {

    /**
     * Num immo rachat.
     *
     * @var int
     */
    private $numImmoRachat;

    /**
     * Get the num immo rachat.
     *
     * @return int Returns the num immo rachat.
     */
    public function getNumImmoRachat() {
        return $this->numImmoRachat;
    }

    /**
     * Set the num immo rachat.
     *
     * @param int $numImmoRachat The num immo rachat.
     */
    public function setNumImmoRachat($numImmoRachat) {
        $this->numImmoRachat = $numImmoRachat;
        return $this;
    }
}
