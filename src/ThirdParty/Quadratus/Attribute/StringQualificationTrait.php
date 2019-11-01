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
 * Qualification trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualificationTrait {

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }
}
