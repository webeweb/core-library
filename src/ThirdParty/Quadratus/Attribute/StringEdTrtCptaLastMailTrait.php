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
 * Ed trt cpta last mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdTrtCptaLastMailTrait {

    /**
     * Ed trt cpta last mail.
     *
     * @var string
     */
    private $edTrtCptaLastMail;

    /**
     * Get the ed trt cpta last mail.
     *
     * @return string Returns the ed trt cpta last mail.
     */
    public function getEdTrtCptaLastMail() {
        return $this->edTrtCptaLastMail;
    }

    /**
     * Set the ed trt cpta last mail.
     *
     * @param string $edTrtCptaLastMail The ed trt cpta last mail.
     */
    public function setEdTrtCptaLastMail($edTrtCptaLastMail) {
        $this->edTrtCptaLastMail = $edTrtCptaLastMail;
        return $this;
    }
}
