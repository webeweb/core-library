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
 * T mercredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTMercrediTrait {

    /**
     * T mercredi.
     *
     * @var bool
     */
    private $tMercredi;

    /**
     * Get the t mercredi.
     *
     * @return bool Returns the t mercredi.
     */
    public function getTMercredi() {
        return $this->tMercredi;
    }

    /**
     * Set the t mercredi.
     *
     * @param bool $tMercredi The t mercredi.
     */
    public function setTMercredi($tMercredi) {
        $this->tMercredi = $tMercredi;
        return $this;
    }
}
