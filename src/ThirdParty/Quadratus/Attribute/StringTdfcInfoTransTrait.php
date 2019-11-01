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
 * Tdfc info trans trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTdfcInfoTransTrait {

    /**
     * Tdfc info trans.
     *
     * @var string
     */
    private $tdfcInfoTrans;

    /**
     * Get the tdfc info trans.
     *
     * @return string Returns the tdfc info trans.
     */
    public function getTdfcInfoTrans() {
        return $this->tdfcInfoTrans;
    }

    /**
     * Set the tdfc info trans.
     *
     * @param string $tdfcInfoTrans The tdfc info trans.
     */
    public function setTdfcInfoTrans($tdfcInfoTrans) {
        $this->tdfcInfoTrans = $tdfcInfoTrans;
        return $this;
    }
}
