<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Data synchro supprime model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DataSynchroSupprime {

    /**
     * Type data.
     *
     * @var string
     */
    private $typeData;

    /**
     * Uniq i d blocage.
     *
     * @var string
     */
    private $uniqIDBlocage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the type data.
     *
     * @return string Returns the type data.
     */
    public function getTypeData() {
        return $this->typeData;
    }

    /**
     * Get the uniq i d blocage.
     *
     * @return string Returns the uniq i d blocage.
     */
    public function getUniqIDBlocage() {
        return $this->uniqIDBlocage;
    }

    /**
     * Set the type data.
     *
     * @param string $typeData The type data.
     * @return DataSynchroSupprime Returns this data synchro supprime.
     */
    public function setTypeData($typeData) {
        $this->typeData = $typeData;
        return $this;
    }

    /**
     * Set the uniq i d blocage.
     *
     * @param string $uniqIDBlocage The uniq i d blocage.
     * @return DataSynchroSupprime Returns this data synchro supprime.
     */
    public function setUniqIDBlocage($uniqIDBlocage) {
        $this->uniqIDBlocage = $uniqIDBlocage;
        return $this;
    }
}
