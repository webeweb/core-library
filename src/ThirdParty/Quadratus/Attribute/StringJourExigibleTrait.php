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
 * Jour exigible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourExigibleTrait {

    /**
     * Jour exigible.
     *
     * @var string
     */
    private $jourExigible;

    /**
     * Get the jour exigible.
     *
     * @return string Returns the jour exigible.
     */
    public function getJourExigible() {
        return $this->jourExigible;
    }

    /**
     * Set the jour exigible.
     *
     * @param string $jourExigible The jour exigible.
     */
    public function setJourExigible($jourExigible) {
        $this->jourExigible = $jourExigible;
        return $this;
    }
}
