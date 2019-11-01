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
 * Interim indem cp fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterimIndemCpFillonTrait {

    /**
     * Interim indem cp fillon.
     *
     * @var bool
     */
    private $interimIndemCpFillon;

    /**
     * Get the interim indem cp fillon.
     *
     * @return bool Returns the interim indem cp fillon.
     */
    public function getInterimIndemCpFillon() {
        return $this->interimIndemCpFillon;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool $interimIndemCpFillon The interim indem cp fillon.
     */
    public function setInterimIndemCpFillon($interimIndemCpFillon) {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }
}
