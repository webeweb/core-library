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
 * Code statut categ irc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeStatutCategIrcTrait {

    /**
     * Code statut categ irc.
     *
     * @var string
     */
    private $codeStatutCategIrc;

    /**
     * Get the code statut categ irc.
     *
     * @return string Returns the code statut categ irc.
     */
    public function getCodeStatutCategIrc() {
        return $this->codeStatutCategIrc;
    }

    /**
     * Set the code statut categ irc.
     *
     * @param string $codeStatutCategIrc The code statut categ irc.
     */
    public function setCodeStatutCategIrc($codeStatutCategIrc) {
        $this->codeStatutCategIrc = $codeStatutCategIrc;
        return $this;
    }
}
