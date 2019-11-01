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
 * Particip serv pers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatParticipServPersTrait {

    /**
     * Particip serv pers.
     *
     * @var float
     */
    private $participServPers;

    /**
     * Get the particip serv pers.
     *
     * @return float Returns the particip serv pers.
     */
    public function getParticipServPers() {
        return $this->participServPers;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float $participServPers The particip serv pers.
     */
    public function setParticipServPers($participServPers) {
        $this->participServPers = $participServPers;
        return $this;
    }
}
