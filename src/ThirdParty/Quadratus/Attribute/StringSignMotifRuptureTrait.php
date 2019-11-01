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
 * Sign motif rupture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignMotifRuptureTrait {

    /**
     * Sign motif rupture.
     *
     * @var string
     */
    private $signMotifRupture;

    /**
     * Get the sign motif rupture.
     *
     * @return string Returns the sign motif rupture.
     */
    public function getSignMotifRupture() {
        return $this->signMotifRupture;
    }

    /**
     * Set the sign motif rupture.
     *
     * @param string $signMotifRupture The sign motif rupture.
     */
    public function setSignMotifRupture($signMotifRupture) {
        $this->signMotifRupture = $signMotifRupture;
        return $this;
    }
}
