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
 * Ed bul last fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdBulLastFaxTrait {

    /**
     * Ed bul last fax.
     *
     * @var string
     */
    private $edBulLastFax;

    /**
     * Get the ed bul last fax.
     *
     * @return string Returns the ed bul last fax.
     */
    public function getEdBulLastFax() {
        return $this->edBulLastFax;
    }

    /**
     * Set the ed bul last fax.
     *
     * @param string $edBulLastFax The ed bul last fax.
     */
    public function setEdBulLastFax($edBulLastFax) {
        $this->edBulLastFax = $edBulLastFax;
        return $this;
    }
}
