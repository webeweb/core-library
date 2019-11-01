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
 * Code service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeServiceTrait {

    /**
     * Code service.
     *
     * @var string
     */
    private $codeService;

    /**
     * Get the code service.
     *
     * @return string Returns the code service.
     */
    public function getCodeService() {
        return $this->codeService;
    }

    /**
     * Set the code service.
     *
     * @param string $codeService The code service.
     */
    public function setCodeService($codeService) {
        $this->codeService = $codeService;
        return $this;
    }
}
