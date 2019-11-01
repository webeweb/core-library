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
 * Uniq id lm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdLmTrait {

    /**
     * Uniq id lm.
     *
     * @var string
     */
    private $uniqIdLm;

    /**
     * Get the uniq id lm.
     *
     * @return string Returns the uniq id lm.
     */
    public function getUniqIdLm() {
        return $this->uniqIdLm;
    }

    /**
     * Set the uniq id lm.
     *
     * @param string $uniqIdLm The uniq id lm.
     */
    public function setUniqIdLm($uniqIdLm) {
        $this->uniqIdLm = $uniqIdLm;
        return $this;
    }
}
