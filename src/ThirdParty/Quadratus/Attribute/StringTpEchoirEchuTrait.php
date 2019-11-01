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
 * Tp echoir echu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpEchoirEchuTrait {

    /**
     * Tp echoir echu.
     *
     * @var string
     */
    private $tpEchoirEchu;

    /**
     * Get the tp echoir echu.
     *
     * @return string Returns the tp echoir echu.
     */
    public function getTpEchoirEchu() {
        return $this->tpEchoirEchu;
    }

    /**
     * Set the tp echoir echu.
     *
     * @param string $tpEchoirEchu The tp echoir echu.
     */
    public function setTpEchoirEchu($tpEchoirEchu) {
        $this->tpEchoirEchu = $tpEchoirEchu;
        return $this;
    }
}
