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
 * Classification util trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClassificationUtilTrait {

    /**
     * Classification util.
     *
     * @var string
     */
    private $classificationUtil;

    /**
     * Get the classification util.
     *
     * @return string Returns the classification util.
     */
    public function getClassificationUtil() {
        return $this->classificationUtil;
    }

    /**
     * Set the classification util.
     *
     * @param string $classificationUtil The classification util.
     */
    public function setClassificationUtil($classificationUtil) {
        $this->classificationUtil = $classificationUtil;
        return $this;
    }
}
