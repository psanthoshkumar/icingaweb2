<?php
/* Icinga Web 2 | (c) 2013-2015 Icinga Development Team | GPLv2+ */

namespace Icinga\Data;

/**
 * Interface for sorting a result set
 */
interface Sortable
{
    /**
     * Sort ascending
     */
    const SORT_ASC = 'ASC';

    /**
     * Sort descending
     */
    const SORT_DESC  = 'DESC';

    /**
     * Sort result set by the given field (and direction)
     *
     * Preferred usage:
     * <code>
     * $query->order('field, 'ASC')
     * </code>
     *
     * @param  string   $field
     * @param  string   $direction
     *
     * @return self
     */
    public function order($field, $direction = null);

    /**
     * Whether an order is set
     *
     * @param   string  $column
     *
     * @return bool
     */
    public function hasOrder($column = null);

    /**
     * Get the order if any
     *
     * @return array|null
     */
    public function getOrder();
}
