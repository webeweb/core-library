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
 * Chrono prochain num trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntChronoProchainNumTrait {

    /**
     * Chrono prochain num.
     *
     * @var int
     */
    private $chronoProchainNum;

    /**
     * Get the chrono prochain num.
     *
     * @return int Returns the chrono prochain num.
     */
    public function getChronoProchainNum() {
        return $this->chronoProchainNum;
    }

    /**
     * Set the chrono prochain num.
     *
     * @param int $chronoProchainNum The chrono prochain num.
     */
    public function setChronoProchainNum($chronoProchainNum) {
        $this->chronoProchainNum = $chronoProchainNum;
        return $this;
    }
}
