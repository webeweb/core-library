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

use DateTime;

/**
 * Pre lib date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreLibDateLimiteTrait {

    /**
     * Pre lib date limite.
     *
     * @var DateTime|null
     */
    private $preLibDateLimite;

    /**
     * Get the pre lib date limite.
     *
     * @return DateTime|null Returns the pre lib date limite.
     */
    public function getPreLibDateLimite() {
        return $this->preLibDateLimite;
    }

    /**
     * Set the pre lib date limite.
     *
     * @param DateTime|null $preLibDateLimite The pre lib date limite.
     */
    public function setPreLibDateLimite(DateTime $preLibDateLimite = null) {
        $this->preLibDateLimite = $preLibDateLimite;
        return $this;
    }
}
