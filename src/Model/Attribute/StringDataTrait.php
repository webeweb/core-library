<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String data trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringDataTrait {

    /**
     * Data.
     *
     * @var string
     */
    protected $data;

    /**
     * Get the data.
     *
     * @return string Returns the data.
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Set the data.
     *
     * @param string $data The data.
     */
    public function setData($data) {
        $this->data = $data;
        return $this;
    }
}
