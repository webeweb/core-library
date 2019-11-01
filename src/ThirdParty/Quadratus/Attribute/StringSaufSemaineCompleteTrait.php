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
 * Sauf semaine complete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSaufSemaineCompleteTrait {

    /**
     * Sauf semaine complete.
     *
     * @var string
     */
    private $saufSemaineComplete;

    /**
     * Get the sauf semaine complete.
     *
     * @return string Returns the sauf semaine complete.
     */
    public function getSaufSemaineComplete() {
        return $this->saufSemaineComplete;
    }

    /**
     * Set the sauf semaine complete.
     *
     * @param string $saufSemaineComplete The sauf semaine complete.
     */
    public function setSaufSemaineComplete($saufSemaineComplete) {
        $this->saufSemaineComplete = $saufSemaineComplete;
        return $this;
    }
}
