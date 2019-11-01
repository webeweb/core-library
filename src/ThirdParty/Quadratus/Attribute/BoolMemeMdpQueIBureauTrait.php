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
 * Meme mdp que i bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMemeMdpQueIBureauTrait {

    /**
     * Meme mdp que i bureau.
     *
     * @var bool
     */
    private $memeMdpQueIBureau;

    /**
     * Get the meme mdp que i bureau.
     *
     * @return bool Returns the meme mdp que i bureau.
     */
    public function getMemeMdpQueIBureau() {
        return $this->memeMdpQueIBureau;
    }

    /**
     * Set the meme mdp que i bureau.
     *
     * @param bool $memeMdpQueIBureau The meme mdp que i bureau.
     */
    public function setMemeMdpQueIBureau($memeMdpQueIBureau) {
        $this->memeMdpQueIBureau = $memeMdpQueIBureau;
        return $this;
    }
}
