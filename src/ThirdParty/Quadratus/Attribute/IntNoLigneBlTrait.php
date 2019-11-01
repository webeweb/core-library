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
 * No ligne bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLigneBlTrait {

    /**
     * No ligne bl.
     *
     * @var int
     */
    private $noLigneBl;

    /**
     * Get the no ligne bl.
     *
     * @return int Returns the no ligne bl.
     */
    public function getNoLigneBl() {
        return $this->noLigneBl;
    }

    /**
     * Set the no ligne bl.
     *
     * @param int $noLigneBl The no ligne bl.
     */
    public function setNoLigneBl($noLigneBl) {
        $this->noLigneBl = $noLigneBl;
        return $this;
    }
}
