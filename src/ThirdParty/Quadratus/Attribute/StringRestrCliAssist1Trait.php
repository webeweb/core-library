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
 * Restr cli assist1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliAssist1Trait {

    /**
     * Restr cli assist1.
     *
     * @var string
     */
    private $restrCliAssist1;

    /**
     * Get the restr cli assist1.
     *
     * @return string Returns the restr cli assist1.
     */
    public function getRestrCliAssist1() {
        return $this->restrCliAssist1;
    }

    /**
     * Set the restr cli assist1.
     *
     * @param string $restrCliAssist1 The restr cli assist1.
     */
    public function setRestrCliAssist1($restrCliAssist1) {
        $this->restrCliAssist1 = $restrCliAssist1;
        return $this;
    }
}
