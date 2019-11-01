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
 * Tab bord date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTabBordDateLimiteTrait {

    /**
     * Tab bord date limite.
     *
     * @var DateTime|null
     */
    private $tabBordDateLimite;

    /**
     * Get the tab bord date limite.
     *
     * @return DateTime|null Returns the tab bord date limite.
     */
    public function getTabBordDateLimite() {
        return $this->tabBordDateLimite;
    }

    /**
     * Set the tab bord date limite.
     *
     * @param DateTime|null $tabBordDateLimite The tab bord date limite.
     */
    public function setTabBordDateLimite(DateTime $tabBordDateLimite = null) {
        $this->tabBordDateLimite = $tabBordDateLimite;
        return $this;
    }
}
