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
 * Num ligne prog trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigneProgTrait {

    /**
     * Num ligne prog.
     *
     * @var int
     */
    private $numLigneProg;

    /**
     * Get the num ligne prog.
     *
     * @return int Returns the num ligne prog.
     */
    public function getNumLigneProg() {
        return $this->numLigneProg;
    }

    /**
     * Set the num ligne prog.
     *
     * @param int $numLigneProg The num ligne prog.
     */
    public function setNumLigneProg($numLigneProg) {
        $this->numLigneProg = $numLigneProg;
        return $this;
    }
}
