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
 * Das type decl detail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDasTypeDeclDetailTrait {

    /**
     * Das type decl detail.
     *
     * @var string
     */
    private $dasTypeDeclDetail;

    /**
     * Get the das type decl detail.
     *
     * @return string Returns the das type decl detail.
     */
    public function getDasTypeDeclDetail() {
        return $this->dasTypeDeclDetail;
    }

    /**
     * Set the das type decl detail.
     *
     * @param string $dasTypeDeclDetail The das type decl detail.
     */
    public function setDasTypeDeclDetail($dasTypeDeclDetail) {
        $this->dasTypeDeclDetail = $dasTypeDeclDetail;
        return $this;
    }
}
