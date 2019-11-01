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
 * Jrn tri service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnTriServiceTrait {

    /**
     * Jrn tri service.
     *
     * @var string
     */
    private $jrnTriService;

    /**
     * Get the jrn tri service.
     *
     * @return string Returns the jrn tri service.
     */
    public function getJrnTriService() {
        return $this->jrnTriService;
    }

    /**
     * Set the jrn tri service.
     *
     * @param string $jrnTriService The jrn tri service.
     */
    public function setJrnTriService($jrnTriService) {
        $this->jrnTriService = $jrnTriService;
        return $this;
    }
}
