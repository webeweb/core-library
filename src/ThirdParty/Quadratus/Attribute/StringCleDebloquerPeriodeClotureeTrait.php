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
 * Cle debloquer periode cloturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleDebloquerPeriodeClotureeTrait {

    /**
     * Cle debloquer periode cloturee.
     *
     * @var string
     */
    private $cleDebloquerPeriodeCloturee;

    /**
     * Get the cle debloquer periode cloturee.
     *
     * @return string Returns the cle debloquer periode cloturee.
     */
    public function getCleDebloquerPeriodeCloturee() {
        return $this->cleDebloquerPeriodeCloturee;
    }

    /**
     * Set the cle debloquer periode cloturee.
     *
     * @param string $cleDebloquerPeriodeCloturee The cle debloquer periode cloturee.
     */
    public function setCleDebloquerPeriodeCloturee($cleDebloquerPeriodeCloturee) {
        $this->cleDebloquerPeriodeCloturee = $cleDebloquerPeriodeCloturee;
        return $this;
    }
}
