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
 * Contact signature dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContactSignatureDnaeTrait {

    /**
     * Contact signature dnae.
     *
     * @var string
     */
    private $contactSignatureDnae;

    /**
     * Get the contact signature dnae.
     *
     * @return string Returns the contact signature dnae.
     */
    public function getContactSignatureDnae() {
        return $this->contactSignatureDnae;
    }

    /**
     * Set the contact signature dnae.
     *
     * @param string $contactSignatureDnae The contact signature dnae.
     */
    public function setContactSignatureDnae($contactSignatureDnae) {
        $this->contactSignatureDnae = $contactSignatureDnae;
        return $this;
    }
}
