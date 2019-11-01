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
 * Uniq id planning trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdPlanningTrait {

    /**
     * Uniq id planning.
     *
     * @var string
     */
    private $uniqIdPlanning;

    /**
     * Get the uniq id planning.
     *
     * @return string Returns the uniq id planning.
     */
    public function getUniqIdPlanning() {
        return $this->uniqIdPlanning;
    }

    /**
     * Set the uniq id planning.
     *
     * @param string $uniqIdPlanning The uniq id planning.
     */
    public function setUniqIdPlanning($uniqIdPlanning) {
        $this->uniqIdPlanning = $uniqIdPlanning;
        return $this;
    }
}
