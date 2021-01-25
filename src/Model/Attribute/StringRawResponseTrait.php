<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String raw response trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringRawResponseTrait {

    /**
     * Raw response.
     *
     * @var string|null
     */
    protected $rawResponse;

    /**
     * Get the raw response.
     *
     * @return string|null Returns the raw response.
     */
    public function getRawResponse(): ?string {
        return $this->rawResponse;
    }

    /**
     * Set the raw response.
     *
     * @param string|null $rawResponse The raw response.
     * @return self Returns this instance.
     */
    public function setRawResponse(?string $rawResponse): self {
        $this->rawResponse = $rawResponse;
        return $this;
    }
}
