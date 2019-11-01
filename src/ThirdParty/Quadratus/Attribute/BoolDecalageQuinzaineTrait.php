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
 * Decalage quinzaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDecalageQuinzaineTrait {

    /**
     * Decalage quinzaine.
     *
     * @var bool
     */
    private $decalageQuinzaine;

    /**
     * Get the decalage quinzaine.
     *
     * @return bool Returns the decalage quinzaine.
     */
    public function getDecalageQuinzaine() {
        return $this->decalageQuinzaine;
    }

    /**
     * Set the decalage quinzaine.
     *
     * @param bool $decalageQuinzaine The decalage quinzaine.
     */
    public function setDecalageQuinzaine($decalageQuinzaine) {
        $this->decalageQuinzaine = $decalageQuinzaine;
        return $this;
    }
}
