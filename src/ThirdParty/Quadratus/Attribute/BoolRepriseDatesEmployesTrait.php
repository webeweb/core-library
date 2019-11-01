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
 * Reprise dates employes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepriseDatesEmployesTrait {

    /**
     * Reprise dates employes.
     *
     * @var bool
     */
    private $repriseDatesEmployes;

    /**
     * Get the reprise dates employes.
     *
     * @return bool Returns the reprise dates employes.
     */
    public function getRepriseDatesEmployes() {
        return $this->repriseDatesEmployes;
    }

    /**
     * Set the reprise dates employes.
     *
     * @param bool $repriseDatesEmployes The reprise dates employes.
     */
    public function setRepriseDatesEmployes($repriseDatesEmployes) {
        $this->repriseDatesEmployes = $repriseDatesEmployes;
        return $this;
    }
}
