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
 * No chrono preparation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoChronoPreparationTrait {

    /**
     * No chrono preparation.
     *
     * @var int
     */
    private $noChronoPreparation;

    /**
     * Get the no chrono preparation.
     *
     * @return int Returns the no chrono preparation.
     */
    public function getNoChronoPreparation() {
        return $this->noChronoPreparation;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int $noChronoPreparation The no chrono preparation.
     */
    public function setNoChronoPreparation($noChronoPreparation) {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }
}
