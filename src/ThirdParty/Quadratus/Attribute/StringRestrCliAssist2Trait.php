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
 * Restr cli assist2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliAssist2Trait {

    /**
     * Restr cli assist2.
     *
     * @var string
     */
    private $restrCliAssist2;

    /**
     * Get the restr cli assist2.
     *
     * @return string Returns the restr cli assist2.
     */
    public function getRestrCliAssist2() {
        return $this->restrCliAssist2;
    }

    /**
     * Set the restr cli assist2.
     *
     * @param string $restrCliAssist2 The restr cli assist2.
     */
    public function setRestrCliAssist2($restrCliAssist2) {
        $this->restrCliAssist2 = $restrCliAssist2;
        return $this;
    }
}
