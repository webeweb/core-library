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
 * Ftis contrib mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFtisContribMttTrait {

    /**
     * Ftis contrib mtt.
     *
     * @var float
     */
    private $ftisContribMtt;

    /**
     * Get the ftis contrib mtt.
     *
     * @return float Returns the ftis contrib mtt.
     */
    public function getFtisContribMtt() {
        return $this->ftisContribMtt;
    }

    /**
     * Set the ftis contrib mtt.
     *
     * @param float $ftisContribMtt The ftis contrib mtt.
     */
    public function setFtisContribMtt($ftisContribMtt) {
        $this->ftisContribMtt = $ftisContribMtt;
        return $this;
    }
}
