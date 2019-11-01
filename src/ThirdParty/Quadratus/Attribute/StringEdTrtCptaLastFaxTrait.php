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
 * Ed trt cpta last fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdTrtCptaLastFaxTrait {

    /**
     * Ed trt cpta last fax.
     *
     * @var string
     */
    private $edTrtCptaLastFax;

    /**
     * Get the ed trt cpta last fax.
     *
     * @return string Returns the ed trt cpta last fax.
     */
    public function getEdTrtCptaLastFax() {
        return $this->edTrtCptaLastFax;
    }

    /**
     * Set the ed trt cpta last fax.
     *
     * @param string $edTrtCptaLastFax The ed trt cpta last fax.
     */
    public function setEdTrtCptaLastFax($edTrtCptaLastFax) {
        $this->edTrtCptaLastFax = $edTrtCptaLastFax;
        return $this;
    }
}
