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
 * Num deux immo rachat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumDeuxImmoRachatTrait {

    /**
     * Num deux immo rachat.
     *
     * @var int
     */
    private $numDeuxImmoRachat;

    /**
     * Get the num deux immo rachat.
     *
     * @return int Returns the num deux immo rachat.
     */
    public function getNumDeuxImmoRachat() {
        return $this->numDeuxImmoRachat;
    }

    /**
     * Set the num deux immo rachat.
     *
     * @param int $numDeuxImmoRachat The num deux immo rachat.
     */
    public function setNumDeuxImmoRachat($numDeuxImmoRachat) {
        $this->numDeuxImmoRachat = $numDeuxImmoRachat;
        return $this;
    }
}
