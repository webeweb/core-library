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
 * No ligne br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLigneBrTrait {

    /**
     * No ligne br.
     *
     * @var int
     */
    private $noLigneBr;

    /**
     * Get the no ligne br.
     *
     * @return int Returns the no ligne br.
     */
    public function getNoLigneBr() {
        return $this->noLigneBr;
    }

    /**
     * Set the no ligne br.
     *
     * @param int $noLigneBr The no ligne br.
     */
    public function setNoLigneBr($noLigneBr) {
        $this->noLigneBr = $noLigneBr;
        return $this;
    }
}
