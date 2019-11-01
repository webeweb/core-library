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
 * Uniq id blocage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdBlocageTrait {

    /**
     * Uniq id blocage.
     *
     * @var string
     */
    private $uniqIdBlocage;

    /**
     * Get the uniq id blocage.
     *
     * @return string Returns the uniq id blocage.
     */
    public function getUniqIdBlocage() {
        return $this->uniqIdBlocage;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string $uniqIdBlocage The uniq id blocage.
     */
    public function setUniqIdBlocage($uniqIdBlocage) {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }
}
