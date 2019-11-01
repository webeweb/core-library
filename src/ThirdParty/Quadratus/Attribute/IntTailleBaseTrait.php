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
 * Taille base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTailleBaseTrait {

    /**
     * Taille base.
     *
     * @var int
     */
    private $tailleBase;

    /**
     * Get the taille base.
     *
     * @return int Returns the taille base.
     */
    public function getTailleBase() {
        return $this->tailleBase;
    }

    /**
     * Set the taille base.
     *
     * @param int $tailleBase The taille base.
     */
    public function setTailleBase($tailleBase) {
        $this->tailleBase = $tailleBase;
        return $this;
    }
}
