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
 * Rapport q infos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRapportQInfosTrait {

    /**
     * Rapport q infos.
     *
     * @var string
     */
    private $rapportQInfos;

    /**
     * Get the rapport q infos.
     *
     * @return string Returns the rapport q infos.
     */
    public function getRapportQInfos() {
        return $this->rapportQInfos;
    }

    /**
     * Set the rapport q infos.
     *
     * @param string $rapportQInfos The rapport q infos.
     */
    public function setRapportQInfos($rapportQInfos) {
        $this->rapportQInfos = $rapportQInfos;
        return $this;
    }
}
