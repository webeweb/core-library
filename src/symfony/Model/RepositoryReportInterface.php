<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface RepositoryReportInterface {

    /**
     * Get the average.
     *
     * @return float|null Returns the average.
     */
    public function getAverage(): ?float;

    /**
     * Get the minimum.
     *
     * @return int|null Returns the minimum.
     */
    public function getMinimum(): ?int;

    /**
     * Get the available.
     *
     * @return int|null Returns the available.
     */
    public function getAvailable(): ?int;

    /**
     * Get the column.
     *
     * @return string|null Returns the column.
     */
    public function getColumn(): ?string;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string;

    /**
     * Get the field.
     *
     * @return string|null Returns the field.
     */
    public function getField(): ?string;

    /**
     * Get the table.
     *
     * @return string|null Returns the table.
     */
    public function getTable(): ?string;
}
