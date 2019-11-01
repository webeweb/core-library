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
 * Gere prev norme dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGerePrevNormeDsnTrait {

    /**
     * Gere prev norme dsn.
     *
     * @var bool
     */
    private $gerePrevNormeDsn;

    /**
     * Get the gere prev norme dsn.
     *
     * @return bool Returns the gere prev norme dsn.
     */
    public function getGerePrevNormeDsn() {
        return $this->gerePrevNormeDsn;
    }

    /**
     * Set the gere prev norme dsn.
     *
     * @param bool $gerePrevNormeDsn The gere prev norme dsn.
     */
    public function setGerePrevNormeDsn($gerePrevNormeDsn) {
        $this->gerePrevNormeDsn = $gerePrevNormeDsn;
        return $this;
    }
}
